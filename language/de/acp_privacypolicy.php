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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ALL'									=> 'Alle Seiten',

	'CLICK_TO_SELECT'						=> 'Klicke in die Box, um eine Farbe zu wählen',

	'COOKIE_BLOCK_LINKS'					=> 'Blockiere alle Links',
	'COOKIE_BLOCK_LINKS_EXPLAIN'			=> 'Verhindert, dass ein Benutzer auf irgendeinen Link des Boards zugreift, ehe er die Cookie-Richtlinie akzeptiert hat.',
	'COOKIE_BOX_BDR_COLOUR'					=> 'Rahmenfarbe Cookie-Box',
	'COOKIE_BOX_BDR_COLOUR_EXPLAIN'			=> 'Wähle die Rahmenfarbe für die Cookie-Akzeptanzbox.<br>Die Standardfarbe ist <strong>“#FFFF8A”</strong>',
	'COOKIE_BOX_BDR_WIDTH'					=> 'Cookie-Box Rahmenbreite',
	'COOKIE_BOX_BDR_WIDTH_EXPLAIN'			=> 'Wähle die Rahmenbreite für die Cookie-Akzeptanzbox.<br>Die Standardbreite ist<strong>“1”</strong>',
	'COOKIE_BOX_BG_COLOUR'					=> 'Cookie-Box Hintergrundfarbe',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'			=> 'Wähle die Hintergrundfarbe für die Cookie-Akzeptanzbox.<br>Die Standardfarbe ist <strong>“#00608F”</strong>',
	'COOKIE_BOX_HREF_COLOUR'				=> 'Cookie-Box Linkfarbe',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'		=> 'Wähle die Akzeptanzlinkfarbe für die Cookie-Akzeptanzbox.<br>Die Standardfarbe ist <strong>“#FFFFFF”</strong>',
	'COOKIE_BOX_TXT_COLOUR'					=> 'Cookie-Box Textfarbe',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'			=> 'Wähle die Textfarbe für die Cookie-Akzeptanzbox.<br>Die Standardfarbe ist<strong>“#DBDB00”</strong>',

	'COOKIE_CUSTOM_PAGE'					=> 'Benutze personalisierte Farben für die Cookie-Seite',
	'COOKIE_CUSTOM_PAGE_CORNERS'			=> 'Benutze gerundete Ecken',
	'COOKIE_CUSTOM_PAGE_CORNERS_EXPLAIN'	=> 'Benutze gerundete Ecken auf der Cookie-Richtlinienseite.<br>Dies auf <strong>Nein</strong> zu setzen bedeutet, die Ecken der Seite sind eckig.',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'			=> 'Benutze die personalisierten Farben für die Cookie-Richtlinienseite.<br>Dies auf <strong>Nein</strong> zu setzen bedeutet, dass die Standardfarben deines Styles benutzt werden.',
	'COOKIE_CUSTOM_PAGE_RADIUS'				=> 'Personalisierter Seitenradius',
	'COOKIE_CUSTOM_PAGE_RADIUS_EXPLAIN'		=> 'Setzt die Anzahl an Pixeln für das Abrunden der Ecken auf der personalisierten Cookie-Seite. Dies auf 0 zu setzten bedeutet, dass die Seite eckige Ecken haben wird.<br><em>Der Standard für prosilver ist 7px.</em>',

	'COOKIE_EXPIRE'							=> 'Cookie läuft ab',
	'COOKIE_EXPIRE_EXPLAIN'					=> 'Dies auf Ja zu setzen bedeutet, dass der Benutzer die Cookierichtlinie jährlich neu akzeptieren muss.',

	'COOKIE_PAGE_BG_COLOUR'					=> 'Personalisierte Cookieseiten-Hintergrundfarbe',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'			=> 'Wähle die Hintergrundfarbe für die Seite der Cookirichtlinie.',
	'COOKIE_PAGE_TXT_COLOUR'				=> 'Personalisierte Cookieseiten-Textfarbe',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'		=> 'Wähle die Textfarbe für die Seite der Cookierichtlinie.',

	'COOKIE_POLICY_ENABLE'					=> 'Aktiviere die Cookie-Richtlinie',
	'COOKIE_POLICY_ENABLE_EXPLAIN'			=> 'Aktiviert/deaktiviert die Erfordernis der Genehmigung der Verwendung von Cookies durch alle Benutzer, im Einklang mit der EU Cookie Richtlinie (2012), in diesem Board.',
	'COOKIE_POLICY_EXPLAIN'					=> 'Hier kannst du die Optionen für die Verwaltung des Datenschutzes und der Cookierichtlinien einstellen.',
	'COOKIE_POLICY_ON_INDEX'				=> 'Zeige nur auf Forenübersicht',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'		=> 'Zeigt die Cookie-Akzeptanzbox nur auf der Forenübersicht oder auf allen Seiten an.',
	'COOKIE_POLICY_OPTIONS'					=> 'Optionen Cookierichtlinie',

	'COOKIE_REQUIRE'						=> 'Erfordert Cookie-Akzeptanz',
	'COOKIE_REQUIRE_EXPLAIN'				=> 'Erfordert die Akzeptanz der Board-Cookies, ehe ein Mitglied sich registrieren oder einloggen kann.<br>Dies auf „Ja“ einzustellen bedeutet, dem Benutzer ist (abhängig von den Benutzerrechten) noch erlaubt, das Board anzusehen.',

	'COOKIE_SHOW_POLICY'					=> 'Zeige Datenschutz/Cookieerklärung',
	'COOKIE_SHOW_POLICY_EXPLAIN'			=> 'Dies auf Ja zu setzen, wird einen Link zur Datenschutzerklärung/Cookierichtlinie in der Navigationsleiste anzeigen, wenn die Cookie Policy deaktiviert ist. Du kannst beispielsweise eine Datenschutz/Cookieerklärung haben, ohne dass die Akzeptanzbox erforderlich ist.',

	'CUSTOM_BOX_COLOURS'					=> 'Cookie-Box Farben',
	'CUSTOM_BOX_COLOURS_EXPLAIN'			=> '<strong>Hier kannst du die Farben der Cookie-Akzeptanzbox ändern, damit sie zu deinem Style passt.</strong>',
	'CUSTOM_PAGE_COLOURS'					=> 'Personalisierte Cookieseiten-Optionen',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'			=> '<strong>Hier kannst du für die Cookierichtlinienseite die Farben ändern, und/oder gerundete Ecken einstellen.</strong>',

	'PIXELS'								=> 'px',
	'POLICIES'								=> 'Regeln',
	'PRIVACY_POLICY_ENABLE'					=> 'Aktiviere die Datenschutzerklärung',
	'PRIVACY_POLICY_ENABLE_EXPLAIN'			=> 'Aktiviert/deaktiviert die Erfordernis der Zustimmung aller Benutzer zur GDPR (2018)(EU-DSGVO) in diesem Forum.',
	'PRIVACY_POLICY_OPTIONS'				=> 'Optionen Datenschutzerklärung',
	'PRIVACY_POLICY_FORCE'					=> 'Erzwinge Akzeptanz Privatsphäre',
	'PRIVACY_POLICY_FORCE_EXPLAIN'			=> 'Zwinge alle Benutzer dieses Boards, die GDPR zu akzeptieren.',
	'PRIVACY_POLICY_RESET'					=> 'Privatsphären-Akzeptanz zurücksetzen',
	'PRIVACY_POLICY_RESET_EXPLAIN'			=> 'Setzt die Akzeptanz der Datenschutzrichtlinie zurück, so dass die Mitglieder sie erneut akzeptieren müssen.<br>Wenn dies erst durchgeführt wurde, musst du „<strong>Erzwinge Akzeptanz Privatsphäre</strong>“ auf „<strong>Ja</strong>“ setzen. <br>Diese Option auf „Ja“ zu setzen, wird außerdem die phpBB Cookies zurücksetzen, und damit alle Mitglieder zwingen, sich neu einzuloggen.',
	
	'VERSION'								=> 'Version',	
));
