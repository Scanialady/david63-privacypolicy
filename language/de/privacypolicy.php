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

// DEVELOPERS PLEASE NOTE
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
	'ACCEPT' 				=> 'Ich akzeptiere diese Richtlinie',

	'COOKIE_ACCEPT_TEXT'	=> 'Dieses Board benutzt Cookies, um dir die bestmögliche Nutzererfahrung zu bieten. Um dieses Board benutzen zu können, musst du die Richtlinie akzeptieren.<br>Mehr Informationen über die hier benutzten Cookies findest du, wenn du auf "Cookie-Richtlinie" auf der Hauptseite, oder den Link unten klickst.<br>',
	'COOKIE_ACCEPT'			=> '[ Ich akzeptiere ]',
	'COOKIE_ACCESS'			=> 'Cookie-Zugriff',

	'COOKIE_BLOCK'			=> 'Du kannst nicht auf Links auf diesem Board zugreifen, bis du die Cookie-Richtlinie akzeptiert hast.',

	'COOKIE_POLICY'			=> 'Cookie Richtlinie',
	'COOKIE_PRIV_POLICY'	=> 'Cookie/Datenschutzrichtlinie',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Cookie-Akzeptanz erforderlich</h3>
	<p>Du musst die Cookie-Richtlinie von %1$s akzeptieren, bevor du dich auf dieser Seite registrieren kannst, oder - falls du bereits registriert bist - bevor du dich auf dieser Seite anmelden kannst.</p>',

	'DECLINE' 				=> 'Ich akzeptiere diese Richtlinie nicht',

	'HR_BBCODE_HELPLINE' 	=> 'Insert a horizontal line',

	'POLICY_ACCEPT' 		=> 'Datenschutzrichtlinie akzeptieren',
));
