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
<img class='sitelogo' src='img/anax.png' alt='Eros Logo'/>
<span class='sitetitle'>Eros, kärlekens gud. (OOPHP)</span>
<span class='siteslogan'>Kärleken vinner över allt!</span>
EOD;
 
$eros['main'] = <<<EOD
<h1>Kursmoment 1:</h1>
<p>Skriv redovisningstext på din me-sida.
 Skriv ett stycke (minst 15 meningar) om kursmomentet. Reflektera över svårigheter, problem, lösningar, erfarenheter, lärdomar, resultatet, etc.

Se till att följande frågor besvaras i texten:

    Vilken utvecklingsmiljö använder du?
    Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?
    Vad döpte du din webbmall Anax till?
    Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?
    Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?
    Gjorde du extrauppgiften med GitHub?
</p>
EOD;

$eros['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
// Finally, leave it all to the rendering phase of Eros.
include(EROS_THEME_PATH);