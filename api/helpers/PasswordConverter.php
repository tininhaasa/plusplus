<?php

/**
*
* Classe que converte a senha de acordo com o armazenamento no banco de dados
*
* @author Emprezaz.com
*
**/
class PasswordConverter
{

	public function convert($password)
	{

		if(!ctype_print($password)){
			return bin2hex($password);
		}
		
		return $password;

	}

}