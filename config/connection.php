<?php

/**
*
* Arquivo com as configurações do banco de dados.
*
* @author Emprezaz.com
*
**/

$config = array(
	'dsn'      => 'mysql:dbname=plusplus;host=127.0.0.1',
	'username' => 'root',
	'password' => null
);

// Caso seja o ambiente de produção a configuração é trocada
if(ENV == 'prod'){
	$config['dsn'] 		= 'mysql:dbname=u939375502_plusplus;host=154.49.247.1';
	$config['username'] = 'u939375502_plusplus';
	$config['password'] = '~@ilDQp0';
}

return $config;