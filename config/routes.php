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
	'atividades'       => 'ActivitiesController/index',
);

// rotas POST
$commonPost = array(

	'cadastreUser' 	=> 'CadastreController/cadastreUser',
	'loginUser' 	=> 'LoginController/loginUser',

);

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;