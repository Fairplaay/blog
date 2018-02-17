<?php

/**
* 
*/
class ViewController
{
	private static $viewPath='./view/';
	public function loadView($view)
	{
		require_once (self::$viewPath . 'header.php');
		require_once (self::$viewPath . $view. '.php');
		require_once (self::$viewPath . 'footer.php');
	}
}