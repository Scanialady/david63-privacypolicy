<?php
/**
*
* @version $Id$
* @package Privacy Policy Extension (Deutsch)
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ACP_USER_UTILS'		=> 'Benutzerwerkzeuge',

	'COOKIE_POLICY'			=> 'Datenschutz & Cookie Richtlinie',
	'COOKIE_POLICY_LOG'		=> '<strong>Einstellungen Datenschutzrichtlinie aktualisiert.</strong>',

	'LOG_CURL_ERROR'		=> '<strong>cURL ist nicht verfügbar auf diesem Server.</strong>',
	'LOG_IP_LOOKUP_ERROR'	=> '<strong>Die IP-Suche ist fehlgeschlagen.</strong>',
	'LOG_QUOTA_EXCEEDED'	=> '<strong>Das stündliche Suchkontingent wurde überschritten.</strong>',
	'LOG_SERVER_ERROR'		=> '<strong>Die IP-Adresse konnte nicht ermittelt werden.</strong>',

	'PRIVACY_DATA'			=> 'Datenschutzdaten',
	'PRIVACY_LIST'			=> 'Datenschutzliste',
	'PRIVACY_POLICY'		=> 'Datenschutzrichtlinie',
	'PRIVACY_POLICY_MANAGE'	=> 'Einstellungen Datenschutzrichtlinie',
	'POLICY_RESET_LOG'		=> '<strong>Datenschutzakzeptanz zurückgesetzt</strong>',
));
