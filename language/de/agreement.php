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
	'TERMS_OF_USE_CONTENT_2' => '<br><br><strong>GDPR</strong><br>Um der EU-GDPR (EU-DSGVO, von 2018) zu entsprechen, müssen wir dich auf folgendes aufmerksam machen.<br><br>Zusätzlich zu oben in „%1$s“ genannten Punkten werden auch deine IP-Adressen gespeichert, unter denen du Beiträge leistest. Abhängig von deinen Einstellungen, kann “%1$s” dir E-Mails an die von dir bei der Registrierung angegebenen oder später geänderten E-Mail-Adresse senden, doch kannst du diese Einstellungen in deinem Benutzerkontrollbereich (UCP) jederzeit ändern, solltest du den Empfang stoppen wollen.<br><br>Die persönlichen Details, die du uns während deiner Anmeldung gegeben hast, werden ausschließlich für die Zwecke der Boardfunktionalität von „%1$s“ benutzt. Sie werden für nichts anderes benutzt und nicht an Dritte weitergegeben ohne deine explizite Erlaubnis.<br><br>Die einzigen anderen Informationen über dich sind die, welche du in den Foren veröffentlichst, welche als „öffentlich verfügbar“ betrachtet werden, weil sie von Suchmaschinen indexiert werden, ebenso wie von Online-Archivseiten.<br><br>Bei einem Klick auf den Button unten „Ich akzeptiere diese Bedingungen“, wird deine Akzeptanz dieser Bedingungen gespeichert.',
));
