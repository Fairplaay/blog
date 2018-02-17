<?php

/**
* 
*/
class Router
{
	public $route;
	function __construct($route)
	{
		$this->route = (isset($_GET['r'])) ? $_GET['r'] : 'home' ;
		$controller=new ViewController();
		switch ($this->route) {
			case 'home':
				# code...
				$controller->loadView('home');	
				break;
			case 'panel':
				# code...
				$controller->loadView('panel');	
				break;
			case 'catalogo':
				# code...
				$controller->loadView('catalogo');	
				break;
			case 'login':
				# code...
				$controller->loadView('login');	
				break;
			
			default:
				# code...
				break;
		}
	}
}