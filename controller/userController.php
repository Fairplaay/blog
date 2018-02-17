<?php

class userController
{
	private $model;
	function __construct()
	{
		$this->model=new usersModel();
	}
	public function get($data_user=''){
		return $this->model->get($data_user);
	}
	public function set($data_user=[]){
		return $this->model->set($data_user);
	}
	public function del($data_user=''){
		return $this->model->del($data_user);
	}
}