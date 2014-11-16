<?php 
/**
 * This is a Eros pagecontroller.
 *
 */
// Include the essential config-file which also creates the $eros variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Eros container.
$eros['title'] = "404";
$eros['header'] = "";
$eros['main'] = "This is a Eros 404. Document is not here.";
$eros['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Eros.
include(EROS_THEME_PATH);