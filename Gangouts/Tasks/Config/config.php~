<?php
	//include_once '../Public/index.php';
	ini_set("log_errors", 1);
	ini_set("error_log", "/tmp/php-error.log");
	error_log( "Hello, errors!" );
	define("DB_HOST" ,    "127.0.0.1");
	define("DB_USER",     "root");
	define("DB_PASSWORD", "MYSECRET");
	define("DB_NAME" ,    "Gangouts");
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(dirname(__FILE__)));
	define('HOME',ROOT.'/Application');
	
	//$url = $_GET['url'];
	function __autoload($className)
	{
		if (file_exists(HOME . DS .'controller' . DS . $className . '.php')) {
			require_once(HOME . DS .'controller' . DS . $className . '.php');
		} else if (file_exists(HOME .DS.'model'.DS. $className . '.php')) {
			require_once( HOME. DS .'model' . DS . $className . '.php');
		} 
	}
	
	?>
