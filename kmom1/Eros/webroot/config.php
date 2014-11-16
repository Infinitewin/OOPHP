<?php
/**
 * Config-file for Anax. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Anax paths.
 *
 */
define('EROS_INSTALL_PATH', __DIR__ . '/..');
define('EROS_THEME_PATH', EROS_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(EROS_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Eros variable.
 *
 */
$eros = array();
 
 
/**
 * Site wide settings.
 *
 */
$eros['lang']         = 'sv';
$eros['title_append'] = ' | Eros, en webbtemplate';

/**
 * Theme related settings.
 *
 */
/**
 * Theme related settings.
 *
 */
//$eros['stylesheet'] = 'css/style.css';
$eros['stylesheets'] = array('css/style.css');
$eros['favicon']    = 'favicon.ico';

/**
 * Settings for modernizr.
 *
 */
$eros['modernizr'] = 'js/modernizr.js';

/**
 * Settings for jQuery library.
 *
 */
$eros['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$eros['jquery'] = null; // To disable jQuery


/**
* Settings for menu options
*
*/
$eros["menu"] = array(
  'callback' => 'modifyNavbar',
  'items'    => array(
    'home'   => array('text'=>'Me-sidan',      'url'=>'me.php', 'class'=>null),
    'report' => array('text'=>'Rapportering',  'url'=>'report.php', 'class'=>null),
    'source' => array('text'=>'Eros-Källkod',  'url'=>'CSource.php', 'class'=>null),
	'source2' => array('text'=>'Full-källkod', 'url'=>'../source.php', 'class'=>null),
  ),
);
$eros['navbar'] = <<<EOD
navbar
EOD;


/**
 * Settings for personal JavaScript files.
 *
 */
//$anax['javascript_include'] = array();
//$anax['javascript_include'] = array('js/main.js'); // To add extra javascript files