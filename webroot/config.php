<?php

//Error reporting
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering',0);

//Define Alam 
define('AlAM_INSTALL_PATH',__DIR__ . '/..');
define('ALAM_THEME_PATH', AlAM_INSTALL_PATH .  '/theme/render.php');

//include bootstrapping functions
include(AlAM_INSTALL_PATH . '/src/bootstrap.php');

//start session
session_name(preg_replace('/[^a-z\d]/i','',__DIR__));
session_start();

$Alam=array();
$Alam['lang'] = 'sv';
$Alam['pageId'] = '';
$Alam['title_append'] = '|Alam en webbtemlate';
$Alam['stylesheet'] = 'css/style.css';
$Alam['favicon'] = 'img/favicon_bth.ico';
$Alam['modernizr'] = 'js/modernizr.js';
$Alam['jquery'] = null;
$Alam['meny']= array('Hem' => "Me.php",
	'Rapport' => "raport.php",
	'Source' => "source.php");
