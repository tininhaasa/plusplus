<?php

/**
*
* Controller do site.
*
* @author Emprezaz.com
*
**/
class HomeController extends Controller
{

	//home header
	public function homeHeader()
	{		

		$this->setLayout(
			'site/shared/layout.php',
			'Página home',
			array(
				'assets/css/style.css'
			),
			array(
				'assets/libs/jquery/jquery.min.js',
				'assets/js/site/home.js'
			)
		);
		$this->view('site/home/main.php');

	}


}