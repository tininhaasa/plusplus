<?php

/**
*
* Controller do erro 404 (Página não encontrada).
*
* @author Emprezaz.com
*
**/
class Error404 extends Controller
{

	public function index()
	{

		$this->setLayout('site/shared/layout.php',
		'Página não encontrada',
		array(
			'assets/css/style.css',
			'assets/css/error.css',
		),
		array(
			'assets/libs/jquery/jquery.min.js'
		));
		$this->view('error/error404.php');

	}

}