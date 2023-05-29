<?php

/**
*
* Controller do site.
*
* @author Emprezaz.com
*
**/
class ActivitiesController extends Controller
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
		$this->view('site/challenges/challenges.php');

	}

	public function intro($params)
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
		switch ($params[0]) {
			case '2':
				$this->view('site/activities/main/part2.php');
				break;
			
			case '3':
				$this->view('site/activities/main/part3.php');
				break;
			
			case '4':
				$this->view('site/activities/main/part4.php');
				break;
			
			default:
				$this->view('site/activities/main/part1.php');
				break;
		}

	}

	public function variables($params)
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
		switch ($params[0]) {
			case '2':
				$this->view('activities/variables/part2.php');
				break;
			
			case '3':
				$this->view('activities/variables/part3.php');
				break;
			
			case '4':
				$this->view('activities/variables/part4.php');
				break;
			
			default:
				$this->view('activities/variables/index.php');
				break;
		}
	}
}