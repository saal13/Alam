<?php
// Default eception handler
function exceptionHandler($exception){
	echo "Alam: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" .$exception->getTracesString(), "</pre>";
}

set_exception_handler('exceptionHandler');

// Autoloader for classes

function myAutoloader($class){
	$path=ALAM_INSTALL_PATH . "/src/{$class}/{$class}.php";
	if(is_file($path)){
		include($path);
	}
	else{
		throw new Exception("Classfile '{$class}' does not exists.");
	}
}
spl_autoload_register('myAutoloader');

/*function dump($array){
	echo "<pre>" . htmlentities(print_r($array, 1)). "</pre>";
}
dump($_SERVER);

*/