<?php 
/**
 * This is a Eros pagecontroller.
 *
 */
// Include the essential config-file which also creates the $eros variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Eros container.
$eros['title'] = "Hello World";
 
$eros['header'] = <<<EOD
<img class='sitelogo' src='img/anax.png' alt='Eros Logo'/>
<span class='sitetitle'>Eros webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$eros['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Eros ser ut och fungerar.</p>
EOD;
 
$eros['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/* Add js/main.js for inclusion
$eros['javascript_include'][] = 'js/main.js';
$eros['javascript_include'][] = 'js/other.js';
*/ 
 
// Finally, leave it all to the rendering phase of Eros.
include(EROS_THEME_PATH);