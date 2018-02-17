<?php
require_once './controller/Autoload.php'; 
$autoload=new Autoload();
$route = (isset($_GET['r'])) ? $_GET['r'] : 'home' ;
$blog = new Router($route);