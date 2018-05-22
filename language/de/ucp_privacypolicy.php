<?php
/**
*
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
	'CSV_DOWNLOAD'					=> 'CSV-Datei dieser Daten herunterladen',

	'REMOVE_ACCOUNT'				=> 'Klicke auf diesen Link, um eine Email zum Boardadministrator zu senden, um die Löschung deines Benutzerkontos anzufragen.',
	'REMOVE_MY_ACCOUNT'				=> 'Bitte mein Benutzerkonto entfernen',
	'REMOVE_MY_ACCOUNT_BODY'		=> 'Ich möchte nicht länger ein Boardmitglied sein, und bitte darum, dass meine persönlichen Daten im Einklang mit den Bestimmungen der GDPR (2018) entfernt werden. %1$sMein Benutzername lautet %2$s',

	'UCP_PRIVACY_POLICY_EXPLAIN'	=> 'Nachfolgend findest du die Details der persönlichen Daten, die wir auf dieser Seite über dich speichern.',
	'UCP_PRIVACY_TITLE'				=> 'Datenschutzdaten',
));
