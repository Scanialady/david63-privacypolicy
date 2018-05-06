<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\core;

use Symfony\Component\DependencyInjection\ContainerInterface;

use \phpbb\template\template;
use \phpbb\user;
use \phpbb\language\language;
use \phpbb\db\driver\driver_interface;
use \phpbb\event\dispatcher_interface;
use \phpbb\di\service_collection;
use \david63\privacypolicy\ext;

/**
* privacypolicy
*/
class privacypolicy
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\event\dispatcher_interface */
	protected $dispatcher;

	/** @var \phpbb\di\service_collection */
	protected $type_collection;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string PHP extension */
	protected $phpEx;

	/** @var string Custom form action */
	protected $u_action;

    /**
	* Constructor for privacypolicy
	*
	* @param \phpbb\template\template		$template			Template object
	* @param \phpbb\user					$user				User object
	* @param \phpbb\language\language		$language			Language object
	* @param \phpbb_db_driver				$db					The db connection
	* @param dispatcher_interface			$dispatcher			phpBB dispatcher
	* @param \phpbb\di\service_collection 	$type_collection	CPF data
	* @param string							$phpbb_root_path    phpBB root path
	* @param string							$php_ext            phpBB extension
	*
	* @access public
	*/
	public function __construct(template $template, user $user, language $language, driver_interface $db, dispatcher_interface $dispatcher, service_collection $type_collection, $root_path, $php_ext)
	{
		$this->template			= $template;
		$this->user				= $user;
		$this->language			= $language;
		$this->db				= $db;
		$this->dispatcher		= $dispatcher;
		$this->type_collection 	= $type_collection;
		$this->root_path		= $root_path;
		$this->php_ext			= $php_ext;
	}

    /**
	* Display the user privacy data
	*
	* @return null
	* @access public
	*/
	public function display_privacy_data($user_id)
	{
		// Get the user data
		$sql = 'SELECT *
			FROM ' . USERS_TABLE . '
			WHERE user_id = ' . $user_id;

		$result = $this->db->sql_query($sql);
		$row	= $this->db->sql_fetchrow($result);

		/**
		* Event to allow adding additional user's privacy data
		*
		* @event david63.privacypolicy.add_data
		* @var	array	row		The row data
		*
		* @since 2.1.0
		*/
		$vars = array(
			'row',
		);
		extract($this->dispatcher->trigger_event('david63.privacypolicy.add_data', compact($vars)));

		// Set output vars for display in the template
		$this->template->assign_vars(array(
			'ACCEPT_DATE'				=> ($row['user_accept_date'] > 0) ? $this->user->format_date($row['user_accept_date']) : $this->language->lang('NOT_ACCEPTED'),
			'BANNER'					=> $this->language->lang('DETAILS_FOR', $row['username']),
			'BIRTHDAY'					=> ($row['user_birthday']) ? $row['user_birthday'] : $this->language->lang('NO_BIRTHDAY'),
			'EMAIL'						=> $row['user_email'],
			'PRIVACY_POLICY_VERSION'	=> ext::PRIVACY_POLICY_VERSION,
			'REG_DATE'					=> $this->user->format_date($row['user_regdate']),
			'REG_IP'					=> $row['user_ip'],
			'USER'						=> $row['username'],

			'U_SEARCH_SELF'				=> append_sid("{$this->root_path}search.$this->phpEx", 'search_id=egosearch'),
		));

		$this->db->sql_freeresult($result);

		// Get the core cpf data fields
		$cpf_fields = $this->get_cpf_data();

		// Get the CPF data for this user
		$sql = $this->db->sql_build_query('SELECT', array(
			'SELECT'	=> 'pfd.*',
			'FROM'		=> array(
				USERS_TABLE => 'u',
			),
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(PROFILE_FIELDS_DATA_TABLE	=> ' pfd',),
					'ON'	=> 'u.user_id = pfd.user_id',
				),
			),
			'WHERE' => "u.user_id = '" . $user_id . "'",
		));

		$result 	= $this->db->sql_query($sql);
		$cpf_data	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		foreach($cpf_data as $key => $data)
		{
			if ($data && $key != 'user_id')
			{
				$cpf_data[$key] = $this->get_pf_data($data, $key);
			}
		}

		$new_array = array_merge_recursive($cpf_fields, $cpf_data);

		foreach($new_array as $key => $data)
		{
			if('pf_phpbb' == substr($key, 0, 8) && $data)
			{
				$cpf_data = ($data[1]) ? $data[1] : $this->language->lang('NO_DATA_ENTERED');
				$this->template->assign_block_vars('cpf_data', array(
					'FIELD_NAME' => $data[0],
					'FIELD_DATA' => $cpf_data,
				));
			}
		}

		// Get the IPs that this user has used
		$sql = 'SELECT poster_ip
			FROM ' . POSTS_TABLE . '
			WHERE poster_id = ' . $this->user->data['user_id'] . "
			GROUP BY poster_ip";

		$result = $this->db->sql_query($sql);

		$user_ips = '';
		while ($row = $this->db->sql_fetchrow($result))
		{
			if($row['poster_ip'])
			{
				$user_ips .= $row['poster_ip'] . '<br>';
			}
		}

		$this->db->sql_freeresult($result);

		$this->template->assign_var('USER_IPS', $user_ips);
	}

	/**
	 * Get a list of the phpBB core cpfs
	 *
	 * @return array $pf_fields_array
	 * @access public
	 */
	public function get_cpf_data()
	{
		$sql = 'SELECT pf.field_name, pl.lang_name
			FROM ' . PROFILE_FIELDS_TABLE . ' pf, ' . PROFILE_LANG_TABLE . ' pl, ' . LANG_TABLE . " l
			WHERE pf.field_id  = pl.field_id
				AND pf.field_name LIKE '%phpbb%'
				AND pl.lang_id = l.lang_id
				AND pf.field_active = 1
				AND l.lang_iso = '" . $this->user->data['user_lang'] . "'";

		$result	= $this->db->sql_query($sql);

		$pf_fields_array = array();

		while ($row = $this->db->sql_fetchrow($result))
		{
			$pf_fields_array['pf_' . $row['field_name']] = ucfirst(strtolower($row['lang_name']));
		}

		$this->db->sql_freeresult($result);

		return $pf_fields_array;
	}

	/**
	 * Get the CPF values
	 *
	 * @param $field_value
	 * @param $field_name
	 *
	 * @return $value
	 * @access public
	 */
	public function get_pf_data($field_value, $field_name)
	{
		// Remove 'pf_' from the field name
		$field_name = substr($field_name, 3);

		// Get the field data
		$sql = $this->db->sql_build_query('SELECT', array(
			'SELECT'	=> 'pf.*, pfl.lang_id, pfl.option_id, pfl.lang_value',
			'FROM'		=> array(
				PROFILE_FIELDS_TABLE => 'pf',
			),
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(PROFILE_FIELDS_LANG_TABLE	=> ' pfl',),
					'ON'	=> 'pf.field_id = pfl.field_id',
				),
			),
			'WHERE' => "pf.field_name = '" . $field_name . "'",
		));

		$result			= $this->db->sql_query($sql);
		$profile_data	= $this->db->sql_fetchrow($result);

		$this->db->sql_freeresult($result);

		$profile_field = $this->type_collection[$profile_data['field_type']];
		return $profile_field->get_profile_value($field_value, $profile_data);
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
