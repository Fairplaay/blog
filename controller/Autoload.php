<?php
class Autoload
{
	function __construct()
	{
		spl_autoload_register(function($class_name)
		{
			$moldelPath='./model/'. $class_name . '.php';
			$controllerPatch='./controller/'.$class_name.'.php';
			if(file_exists($moldelPath)){
				require_once $moldelPath;
			}
			if (file_exists($controllerPatch)) {
				require_once $controllerPatch;
			}
		});
	}
}