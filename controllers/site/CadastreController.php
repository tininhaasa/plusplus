<?php

/**
*
* Controller do site.
*
* @author Emprezaz.com
*
**/
class CadastreController extends Controller
{

	//home header
	public function index()
	{		

		$this->setLayout(
			'site/shared/layout.php',
			'Página home',
			array(
				'assets/css/style.css'
			),
			array(
				'assets/libs/jquery/jquery.min.js',
				'assets/js/site/actividies/main.js'
			)
		);
		$this->view('site/cadastre/index.php');

	}


}