<?php
abstract class Model
{				
	private static $dns= 'mysql:host=localhost;dbname=blog;charset=utf8';
	private static $user= 'root';
	private static $pass='18736609';	
	private $pdo;
	protected $query;
	protected $row;
	abstract protected function set();
	abstract protected function get();
	abstract protected function del();
	abstract protected function update();

	private static function db_open(){
		try
		{
		$pdo=new PDO(self::$dns, self::$user,self::$pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e)
		{
			die("Error al conectar BD". $e->getMessage() . $e->getLine());
		}
		return $pdo;
	}


	protected function setQuery(){
		$conn=self::db_open();
		$conn->query($this->query);
		$conn=null;

	}

	protected function get_query(){
		$conn=self::db_open();
		$result=$conn->prepare($this->query);
		$result->execute();
		$row=$result->fetchAll(PDO::FETCH_OBJ);
		$result=null;
		$conn=null;
		return ($row);
	}
}
