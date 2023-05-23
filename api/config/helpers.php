<?php

/**
*
* Arquivo onde são definidos os helpers
*
* @author Emprezaz.com
*
**/
var_dump($_SERVER['SERVER_NAME']);
define('LOCAL_URL', '/api/');

return array(
	'URLHelper' => new URLHelper(),
);
