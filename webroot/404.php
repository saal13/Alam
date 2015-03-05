<?php

include (__DIR__.'config.php');

$Alam['title'] = "404";
$Alam['header'] = "";
$Alam['main'] = "This is a Anax 404. Document is not here.";
$Alam['footer'] = "";

header("HTTP/1.0 404 Not Found");

include(ALAM_THEME_PATH);
?>
