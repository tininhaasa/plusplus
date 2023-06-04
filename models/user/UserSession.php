<?php

/**
*
* Classe que manipula os dados do usuário na sessão.
*
* @author Emprezaz.com
* 
**/
class UserSession
{

	private function control()
	{
		
		if(!isset($_COOKIE['User'])){
			
			setcookie('User', "", time() + (86400 * (30 * 6)), "/");

		}

	}

	public function saveUser($data)
	{
		//$this->control();

		$data = json_encode($data);
		setcookie('User', $data, time() + (86400 * (30 * 6)), "/");
		return true;
		
	}


	public function has()
	{

		//$this->control();
		if(isset($_COOKIE['User']) && $_COOKIE['User'] != ""){
			return true;
		}

		return false;

	}

	public function get($info)
	{

		//$this->control();
		if(isset($_COOKIE['User'])){
			$data = json_decode($_COOKIE['User'], true);
		}else{
			return false;
		}

		if(isset($data[$info])){
			return $data[$info];
		}else{
			return false;
		}

	}


	public function setUser($info, $value)
	{

		//$this->control();
		if(isset($_COOKIE['User'])){
			$data        = json_decode($_COOKIE['User'], true);
			$data[$info] = $value;

			$data = json_encode($data);
			$_COOKIE['User'] = $data;
			setcookie('User', $data, time() + (86400 * (30 * 6)), "/");
		}

	}

	public function deleteUser()
	{

		//$this->control();
		unset($_COOKIE['User']);
		setcookie('User', null, -1, "/");

	}

	public function checkUser($id)
	{
		$userData = new UserData;
		$result = $userData->getDataById($id);

		if(!$result || $result == ""){
			$this->deleteUser();
		}

		return $result;
	}

}