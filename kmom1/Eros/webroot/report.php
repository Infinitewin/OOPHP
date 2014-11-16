<?php 
/**
 * This is a Eros pagecontroller.
 *
 */
// Include the essential config-file which also creates the $eros variable with its defaults.
include(__DIR__.'/config.php');
// Do it and store it all in variables in the Eros container.
$eros['title'] = "Rapporterings-sida";
 
$eros['header'] = <<<EOD
<img class='sitelogo' src='img/E.jpg' alt='Eros Logo'/>
<span class='sitetitle'>Eros, kärlekens gud. (OOPHP)</span>
<span class='siteslogan'>Kärleken vinner över allt!</span>
EOD;
 
$eros['main'] = <<<EOD
<h1>Kursmoment 1:</h1>
<p>Jag använder Notepad++ som min texteditor och Filezilla som min koppling mot studentservern. 
	Jag har också laddat ner XXAMP för att kunna arbeta lokalt men jag tycker att filerna flyger runt för mycket då.
	PHP har jag redan haft lite kunskaper om så det var inte så svårt att gå igenom PHP20 guiden.
	Eftersom att Mikael hade sin webbmall döpt till något från antika Grekland så valde jag Eros, kärlekens gud.
	Jag lade till source.php utanför webroot med källkod till alla filer som sin egna lilla fil och CSource.php inom Eros som en modul av Anax.
	Jag hade jobbat lite med GitHub under 3an i gymnasiet så det gick snabbt att lägga upp filerna. Jag heter Infinitewin på GitHub (https://github.com/Infinitewin)
	Jag hade väldiga svårigheter med just menyuppgiften då det fanns kod som man skulle dra ner från dbwebb.se och så var koden fel eller så hade den en kodrad som inte blev förklarad.
	Jag använder GenerateMenu-funktionen för att kunna skriva ut menyn men i uppgiftsexemplet så använde man klassen framför GenerateMenu 
	så det stod CNavigation::GenerateMenu. Eftersom att jag hade inkluderat filen och att funktionen var publik så behövde man inte använda klassen + scopeoperatorn för att kunna komma åt funktionen,
	och eftersom att klassnamnet kom in i bilden så hoppade Autoloadern in och försökte inkludera filen en till gång som gjorde att programmet gick helt sönder. Tog mig runt 2 timmar att komma på problemet.
	Men Anax-delen av uppgiften var ganska straightforward och med hjälp av PHP-20 guiden så förstod jag rätt enkelt hur allt fungerade.
</p>
EOD;

$eros['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
// Finally, leave it all to the rendering phase of Eros.
include(EROS_THEME_PATH);