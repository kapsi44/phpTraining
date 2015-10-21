<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
//$url = $_GET['url'];
//require_once(ROOT . DS . 'core' . DS . 'bootstrap.php');
// Load configuration and helper functions 
require_once(ROOT . DS . 'Tasks'.DS.'Config' . DS . 'config.php');
//require_once(ROOT . DS . 'core' . DS . 'functions.php'); // Autoload classes 

function __autoload($className)
{
    if (file_exists(ROOT . DS . 'Application' . DS . 'controller' . DS . ucfirst($className) . '.php')) {
        require_once(ROOT . DS . 'Application' . DS . 'controller' . DS . ucfirst($className) . '.php');
    } else if (file_exists(ROOT . DS . 'Application' . DS . 'model' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'Application' . DS . 'model' . DS . $className . '.php');
    } else if (file_exists(ROOT . DS . 'core' . DS . 'sql.php')) {
        require_once(ROOT . DS . 'core' . DS . 'sql.php');
    }
}
?>