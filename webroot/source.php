<?php 
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 
include('../src/CSource.php'); 
$Alam['pageId'] = "source";
// Do it and store it all in variables in the Anax container.
$Alam['title'] = "SOURCE CODE";
$Alam['stylesheet'] = 'css/SCource.css';
include('incl/header.php');
 
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
$Alam['main'] ="<h1>VIEW SOURCECODE</h1>" . $source->View();

include('incl/footer.php');
 
 
// Finally, leave it all to the rendering phase of Anax.
include(ALAM_THEME_PATH);