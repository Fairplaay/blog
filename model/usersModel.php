<?php

class usersModel extends Model
{
	public function get($data_user = ''){
		$this->query = ($data_user != '')?
		"SELECT * FROM users WHERE id_user = $data_user;":
		"SELECT * FROM users";
		$data=$this->get_query();
		return ($data);
	}
	public function set($data_user=[])
	{	
		foreach ($data_user as $key => $value) {
			$$key=$value;
		}
		$this->query="
		INSERT INTO users SET 
		id_user='$id',
		user='$user',
		name='$name',
		email='$email',
		pass=MD5('$pass'),
		role='$role'";
		$this->setQuery();
	}
	public function update($data_user=[])
	{
		foreach ($data_user as $key => $value) {
			$$key=$value;
		}
		$this->query="UPDATE INTO users SET 
		user='$user',
		name='$name',
		pass='$pass'";
		$this->setQuery();
	}

	public function del($data_user=''){
		$this->query="DELETE * FROM users WHERE id_user=$data_user";
		$this->setQuery();
	}

}
