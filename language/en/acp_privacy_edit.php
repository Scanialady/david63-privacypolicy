<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COOKIE_EDIT_EXPLAIN'				=> 'Here you can customise the board’s Cookie Policy.',
	'COOKIE_EDIT_EXPLAIN_NEW'			=> 'Add a Cookie Policy.',

	'POLICY_DESCRIPTION'				=> 'Policy file name',
	'POLICY_DESCRIPTION_EXPLAIN'		=> 'The name of this policy file - this should be translated into the required language.',
	'POLICY_EDIT'						=> 'Policy Files Editor',
	'POLICY_EDIT_EXPLAIN'				=> 'Here you can select which policy text files you wish to edit, or create a new text file in a specified language.',
	'POLICY_FILE_OPTIONS'	   			=> 'Policy file options',
	'POLICY_SELECT_FILE'		   		=> 'Select file',
	'POLICY_SELECT_LANGUAGE'			=> 'Select language',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN'		=> 'Here you can customise the board’s Privacy Acceptance Policy.',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN_NEW'	=> 'Add a new Privacy Acceptance Policy.',
	'PRIVACY_EDIT_EXPLAIN'				=> 'Here you can customise the board’s Privacy Policy.',
	'PRIVACY_EDIT_EXPLAIN_NEW'			=> 'Add a new Privacy Policy.',

	'TERM_OF_USE_EDIT_EXPLAIN'			=> 'Here you can customise the board’s additional Terms of Use Policy.',
	'TERM_OF_USE_EDIT_EXPLAIN_NEW'		=> 'Add a new additional Terms of Use Policy.',

	'SITENAME'							=> 'Sitename',
	'SITENAME_HELP'						=> 'Insert the sitename placeholder (%sitename%)',

	'VERSION'				   			=> 'Version',
));
