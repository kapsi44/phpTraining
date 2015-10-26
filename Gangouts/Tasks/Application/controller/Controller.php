<?php
require_once '../../Config/config.php';

class Controller
{
	public function render($viewName)
	{ 
		if (file_exists(HOME . DS .'view' . DS . $viewName . '.php')) {
			require_once(HOME . DS .'view' . DS . $viewName . '.php');
		} 
	} 
}
?>