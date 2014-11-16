<?php 
/**
 * This is a Eros pagecontroller.
 *
 */
// Include the essential config-file which also creates the $eros variable with its defaults.
include(__DIR__.'/config.php');
// Do it and store it all in variables in the Eros container.
$eros['title'] = "Me-sida för OOPHP";
 
$eros['header'] = <<<EOD
<img class='sitelogo' src='img/E.jpg' alt='Eros Logo'/>
<span class='sitetitle'>Eros, kärlekens gud. (OOPHP)</span>
<span class='siteslogan'>Kärleken vinner över allt!</span>
EOD;
 
$eros['main'] = <<<EOD
<h1>Vem är jag?</h1>
<p>Jag heter Thomas Kipple och går på Webbprogrammeringsprogrammet på BTH. Jag är egentligen från Norge men har bott i Sverige sedan 2003.

Jag har bott i Göteborg, specifikt i Angered och blev väldigt dator- och spelintresserad när jag blev 12.
 Jag gick på NTI-EC som är en IT-teknisk baserad skola där jag fick läsa Webbutveckling 1 & 2 samt Programmering 1, 
 så jag har redan förkunskaper när det gäller HTML, CSS och PHP. Jag bor nu för närvarande i Ronneby och tänker göra det framöver. 
 Mina intressen är böcker, spel, historia och internet. </p>
EOD;

$eros['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
// Finally, leave it all to the rendering phase of Eros.
include(EROS_THEME_PATH);