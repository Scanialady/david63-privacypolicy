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

	'COOKIE_TEXT'			=> '<h3>Wie verwenden wir Cookies in diesem Board?</h3>
	<p>Wir benutzen Dateien, die als Cookies bezeichnet werden, auf %1$s, um die Leistung und deine Benutzererfahrung zu verbessern. Durch die Benutzung von %1$s stimmst du zu, dass wir diese Art von Dateien auf deinem Gerät speichern dürfen.</p>
<h3>Was sind Cookies?</h3><p>Cookies sind kleine Textdateien, die eine Webseite auf deinem Computer oder Mobilgerät speichert, wenn du die Webseite oder eine ihrer Seiten zum ersten Mal besuchst.<br><br>
Es gibt viele Funktionen, die ein Cookie unterstützen kann. Zum Beispiel kann ein Cookie dieser oder einer anderen Webseite helfen, dein Geräte bei deinem nächsten Besuch wiederzuerkennen. %1$s benutzt den Begriff  „cookies“ in dieser Richtlinie, um auf alle Dateien hinzuweisen, die auf diese Weise Informationen sammeln.<br><br>
Bestimmte Cookies enthalten persönliche Informationen – zum Beispiel, wenn du beim Login auf „Angemeldet bleiben“ klickst, speichert ein Cookie deinen Benutzernamen. Die meisten Cookies speichern keine Informationen, die dich identifizieren, stattdessen sammeln sie mehr allgemeine Daten, wie auf welche Weise Benutzer %1$s erreichen und benutzen, oder den allgemeinen Standort.</p>
<h3>Welche Art von Cookies verwendet %1$s?</h3><p>Cookies können verschiedene Funktionen haben:</p>
<p><b>1. Notwendige Cookies</b><br>Einige Cookies sind notwendig für den Betrieb von  %1$s. Diese Cookies ermöglichen Dienste, die du speziell angefordert hast.</p>
<p><b>2. Leistungs-Cookies</b><br>Diese Cookies können anonyme Informationen auf den besuchten Seiten sammeln. Zum Beispiel können wir Leistungscookies verwenden, um zu verfolgen, welche Seiten am beliebtesten sind, welche Methode der Seitenverknüpfung am effektivsten ist und warum einige Seiten Fehlermeldungen erhalten.</p>
<p><b>3. Funktionalitäts-Cookies</b><br>Diese Cookies erinnern sich an Auswahlen, die du getroffen hast, um deine Benutzererfahrung zu verbessern.</p>
<p>%1$s kann auch Dritten erlauben, Cookies zu verwenden, die in eine der oben genannten Kategorien fallen. Beispielsweise können wir wie viele andere Seiten Google Analytics verwenden, um unseren Webseiten-Traffic zu überwachen.</p>
<h3>Kann ein Boardbenutzer Cookies blockieren?</h3><p>Um zu erfahren, wie du die verwaltest, welche Cookies du erlaubst, schau in den Hilfe-Bereich deines Browsers oder das Handbuch deines Mobilgeräts - oder du kannst eine der unten benannten Seiten besuchen, welche detaillierte Informationen über die Verwaltung, Steuerung und Löschung von Cookies bereitstellen.<br><br>
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org</a><br>
<a href="http://www.allaboutcookies.org" style="text-decoration:none">www.allaboutcookies.org</a></p>
<p>Bitte denke daran, dass bestimmte Teile %1$s möglicherweise nicht korrekt funktionieren, wenn du die Wahl triffst, Cookies zu deaktivieren.</p>
<h3>Cookies auf %1$s von Seiten aus sozialen Netzwerken</h3><p>%1$s enthält möglicherweise Links zu Webseiten sozialer Netzwerke (z.B. Facebook, Twitter oder YouTube). Diese Websites können auch Cookies auf deinem Gerät platzieren, und %1$s kontrolliert nicht, wie sie ihre Cookies verwenden. Daher wird dir von %1$s angeraten, auf deren Webseite(n) nachzusehen, wie Cookies verwendet werden.',

	'COOKIE_POLICY'			=> 'Cookie Richtlinie',
	'COOKIE_PRIV_POLICY'	=> 'Cookie/Datenschutzrichtlinie',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Cookie-Akzeptanz erforderlich</h3>
	<p>Du musst die Cookie-Richtlinie von %1$s akzeptieren, bevor du dich auf dieser Seite registrieren kannst, oder - falls du bereits registriert bist - bevor du dich auf dieser Seite anmelden kannst.</p>',

	'DECLINE' 				=> 'Ich akzeptiere diese Richtlinie nicht',

	'POLICY_ACCEPT' 		=> 'Datenschutzrichtlinie akzeptieren',
	'PRIVACY_POLICY' 		=> '<h3>General Data Protection Regulation - 2018 (GDPR)</h3>
	<br>
	<p>Um den Bestimmungen der GDPR (EU-DSGVO) nachzukommen, müssen wir dich darauf aufmerksam machen, dass dein Benutzerkonto auf „%1$s“ mindestens einen eindeutigen Namen enthält, (im Folgenden „dein Benutzername“), ein persönliches Passwort, welches für die Anmeldung bei deinem Benutzerkonto verwendet wird (im Folgenden „dein Passwort“) und eine persönliche, gültige E-Mail-Adresse (im Folgenden „deine E-Mail“). Die Informationen deines Benutzerkontos bei „%1$s“ sind geschützt durch Datenschutzgesetze, die in dem Land gelten, wo unsere Webseite gespeichert ist. Alle Informationen, die über deinen Benutzernamen, dein Passwort und deine E-Mail-Adresse hinausgehen, welche während des Registrierungsvorgangs von „%1$s“ benötigt werden, sind nach Ermessen von „%1$s“ obligatorisch oder optional. In allen Fällen hast du die Möglichkeit zu wählen, welche Informationen in deinem Konto öffentlich angezeigt werden. Darüber hinaus hast du in deinem Konto die Möglichkeit, automatisch generierte E-Mails zu aktivieren oder zu deaktivieren.
<br><br>
Desweiteren werden wir alle IP-Adressen speichern, mit denen du Beiträge leistest. Abhängig von deinen Einstellungen kann „%1$s“ dir E-Mails senden an die Adresse, welche du für die Registrierung benutzt oder später geändert hast, doch kannst du diese Einstellungen jederzeit in deinem Benutzerkontrollbereich (UCP) ändern, wenn du den Empfang stoppen möchtest.<br><br>Die persönlichen Daten, die du uns bei deiner Anmeldung mitgeteilt hast, werden ausschließlich für die Zwecke der Board-Funktionalität von „%1$s“ verwendet. Sie werden für nichts anderes verwendet und auch nicht ohne deine  ausdrückliche Zustimmung an Dritte weitergegeben. du kannst die persönlichen Daten, welche „%1$s“ über dich bereithält, jederzeit überprüfen im Profilbereich deines Benutzerkontrollbereichs (UCP).
<br><br>
Die einzigen anderen Informationen über dich sind die, welche du in den Foren veröffentlichst, welche als „öffentlich verfügbar“ betrachtet werden, weil sie von Suchmaschinen indexiert werden, ebenso wie von Online-Archivseiten.',

	'PRIVACY_POLICY_ACCEPT' => '<h3>General Data Protection Regulation - 2018 (GDPR)</h3>
	<br>
	<p>Um den Bestimmungen der GDPR (EU-DSGVO) nachzukommen, müssen wir dich darauf aufmerksam machen, dass dein Benutzerkonto auf „%1$s“ mindestens einen eindeutigen Namen enthält, (im Folgenden „dein Benutzername“), ein persönliches Passwort, welches für die Anmeldung bei deinem Benutzerkonto verwendet wird (im Folgenden „dein Passwort“) und eine persönliche, gültige E-Mail-Adresse (im Folgenden „deine E-Mail“). Die Informationen deines Benutzerkontos bei „%1$s“ sind geschützt durch Datenschutzgesetze, die in dem Land gelten, wo unsere Webseite gespeichert ist. Alle Informationen, die über deinen Benutzernamen, dein Passwort und deine E-Mail-Adresse hinausgehen, welche während des Registrierungsvorgangs von „%1$s“ benötigt werden, sind nach Ermessen von „%1$s“ obligatorisch oder optional. In allen Fällen hast du die Möglichkeit zu wählen, welche Informationen in deinem Konto öffentlich angezeigt werden. Darüber hinaus hast du in deinem Konto die Möglichkeit, automatisch generierte E-Mails zu aktivieren oder zu deaktivieren.
<br><br>
Desweiteren werden wir alle IP-Adressen speichern, mit denen du Beiträge leistest. Abhängig von deinen Einstellungen kann „%1$s“ dir E-Mails senden an die Adresse, welche du für die Registrierung benutzt oder später geändert hast, doch kannst du diese Einstellungen jederzeit in deinem Benutzerkontrollbereich (UCP) ändern, wenn du den Empfang stoppen möchtest.<br><br>Die persönlichen Daten, die du uns bei deiner Anmeldung mitgeteilt hast, werden ausschließlich für die Zwecke der Board-Funktionalität von „%1$s“ verwendet. Sie werden für nichts anderes verwendet und auch nicht ohne deine  ausdrückliche Zustimmung an Dritte weitergegeben. du kannst die persönlichen Daten, welche „%1$s“ über dich bereithält, jederzeit überprüfen im Profilbereich deines Benutzerkontrollbereichs (UCP).
<br><br>
Die einzigen anderen Informationen über dich sind die, welche du in den Foren veröffentlichst, welche als „öffentlich verfügbar“ betrachtet werden, weil sie von Suchmaschinen indexiert werden, ebenso wie von Online-Archivseiten.
<br><br>
Bei einem Klick auf den Button “<strong>Ich akzeptiere diese Richtlinie</strong>” wird deine Akzeptanz dieser Bedingungen gespeichert. Wenn du auf den Button “<strong>Ich akzeptiere diese Richtlinie nicht</strong>” klickst, wirst du aus diesem Board abgemeldet.',
));
