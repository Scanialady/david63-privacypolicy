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
	'ACCEPT_DATE'		=> 'Akzeptanzdatum Richtlinie',

	'BIRTHDAY'			=> 'Geburtstag',

	'NO_BIRTHDAY'		=> 'Kein Geburtstag eingegeben',
	'NO_DATA_ENTERED'	=> 'Es wurden keine Daten eingegeben',
	'NOT_ACCEPTED'		=> 'Richtlinie wurde nicht akzeptiert',

	'REG_DATE'			=> 'Registrierungsdatum',
	'REG_IP'			=> 'Registrierungs-IP',

	'USER_IPS'			=> 'IP-Adressen, die du hier benutzt hast',
	
	'VERSION'			=> 'Version',
));
