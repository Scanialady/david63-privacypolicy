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
	'COOKIE_EDIT_EXPLAIN'				=> 'Hier kannst du die Cookie-Richtlinie des Boards personalisieren.',
	'COOKIE_EDIT_EXPLAIN_NEW'			=> 'Hier kannst du eine neue Cookie-Richtlinie hinzufügen.<br />Die Cookie-Erklärung wird angezeigt, wenn die Cookie-Richtlinie aktiviert ist, und ein Benutzer auf den  „Richtlinien“-Link in der unteren Navigationsleiste klickt.',

	'POLICY_DESCRIPTION'				=> 'Richtlinien-Dateiname',
	'POLICY_DESCRIPTION_EXPLAIN'		=> 'Der Anzeigename dieser Richtliniendatei, er sollte in die erforderliche Sprache übersetzt worden sein.',
	'POLICY_EDIT'						=> 'Richtliniendatei-Editor',
	'POLICY_EDIT_EXPLAIN'				=> 'Hier kannst du auswählen, welche Richtlinientextdateien du bearbeiten möchtest, oder eine neue Richtlinientextdatei in einer bestimmten Sprache erstellen.',
	'POLICY_FILE_OPTIONS'	   			=> 'Optionen Richtliniendatei',
	'POLICY_SELECT_FILE'		   		=> 'Datei wählen',
	'POLICY_SELECT_LANGUAGE'			=> 'Sprache wählen',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN'		=> 'Hier kannst du die Datenschutz-Akzeptanz-Richtlinie des Boards personalisieren.',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN_NEW'	=> 'Hier kannst du eine neue Datenschutz-Akzeptanz-Richtlinie hinzufügen.<br />Die Datenschutz-Akzeptanz-Richtlinie wird nach der Datenschutzerklärung angezeigt.',
	'PRIVACY_EDIT_EXPLAIN'				=> 'Hier kannst du die Datenschutzerklärung des Boards personalisieren.',
	'PRIVACY_EDIT_EXPLAIN_NEW'			=> 'Hier kannst du eine neue Datenschutzerklärung hinzufügen.<br />Die Datenschutzerklärung ist die Hauptrichtlinie, sie beschreibt die Datenschutzregeln dieses Boards.',

	'TERM_OF_USE_EDIT_EXPLAIN'			=> 'Hier kannst du die zusätzlichen Nutzungsbedingungen für das Board personalisieren.',
	'TERM_OF_USE_EDIT_EXPLAIN_NEW'		=> 'Hier kannst du eine neue zusätzliche Richtlinie für die Nutzungsbedingungen hinzufügen.<br />Dies wird nach den Hauptnutzungsbedingungen angezeigt, wenn ein neuer Benutzer sich für das Board registrieren möchte.',

	'SITENAME'							=> 'Seitenname',
	'SITENAME_HELP'						=> 'Füge den Platzhalter für den Seitennamen (%sitename%) ein',

	'VERSION'				   			=> 'Version',
));
