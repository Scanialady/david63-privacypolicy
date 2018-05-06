<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\controller;

use \phpbb\user;
use \phpbb\language\language;
use \david63\privacypolicy\core\privacypolicy;

/**
* UCP controller
*/
class ucp_controller implements ucp_interface
{
	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\language\language */
	protected $language;

	/* @var \david63\privacypolicy\core\privacypolicy */
	protected $privacypolicy;

    /**
	* Constructor for ucp controller
	*
	* @param \phpbb\user								$user			User object
	* @param \phpbb\language\language					$language		Language object
	* @param \david63\privacypolicy\core\privacypolicy	privacypolicy	Methods for the extension
	*
	* @return \david63\privacypolicy\controller\ucp_controller
	* @access public
	*/
	public function __construct(user $user, language $language, privacypolicy $privacypolicy)
	{
		$this->user				= $user;
		$this->language			= $language;
		$this->privacypolicy	= $privacypolicy;
	}

    /**
	* Display the options a user can configure for this extension
	*
	* @return null
	* @access public
	*/
	public function privacy_output()
	{
		// Add the language files
		$this->language->add_lang('ucp_privacypolicy', 'david63/privacypolicy');
		$this->language->add_lang('common_privacypolicy', 'david63/privacypolicy');

		$this->privacypolicy->display_privacy_data($this->user->data['user_id']);
	}
}
