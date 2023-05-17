<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* @author Emprezaz.com
*
**/

// rotas normais
$commonRoutes = array(
	'/'               => 'HomeController/homeHeader',
	'home/main'       => 'HomeController/homeMain',
);

// rotas POST
$commonPost = array();

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;