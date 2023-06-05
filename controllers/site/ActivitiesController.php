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
		if (!$this->helpers['UserSession']->has()) {

			$this->setLayout(
				'site/shared/layout.php',
				'Página home',
				array(
					'assets/css/actividies/style.css',
				),
				array(
					'assets/libs/jquery/jquery.min.js',
					'assets/js/site/actividies/main.js'
				)
			);
			$this->view('site/challenges/challenges.php');
		}else{
			
			header('LOCATION: ' . $this->helpers['URLHelper']->getURL() . '/');
		}

	}

	public function intro($params)
	{

		if (!$this->helpers['UserSession']->has()) {
			$this->setLayout(
				'site/shared/layout.php',
				'Página home',
				array(
					'assets/css/actividies/style.css',
					'assets/css/progress.css',
				),
				array(
					'assets/libs/jquery/jquery.min.js',
					'assets/js/site/actividies/main.js',
					'assets/js/site/progress.js',
				)
			);
					$this->view('activities/intro/index.php', array('part' => $params[0], ));
				
				
		}else{
			
			header('LOCATION: ' . $this->helpers['URLHelper']->getURL() . '/');
		}
	}

	public function variables($params)
	{
		if (!$this->helpers['UserSession']->has()) {

			$this->setLayout(
				'site/shared/layout.php',
				'Variáveis',
				array(
					'assets/css/actividies/style.css',
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
		}else{
			
			header('LOCATION: ' . $this->helpers['URLHelper']->getURL() . '/');
		}
	}

	public function ifs($params)
	{
		$this->setLayout(
			'site/shared/layout.php',
			'Estrutura de Seleção',
			array(
				'assets/css/actividies/style.css',
			),
			array(
				'assets/libs/jquery/jquery.min.js',
				'assets/js/site/actividies/main.js'
			)
		);
		switch ($params[0]) {
			case '2':
				$this->view('activities/if/part2.php');
				break;
			
			case '3':
				$this->view('activities/if/part3.php');
				break;
			
			case '4':
				$this->view('activities/if/part4.php');
				break;

			case '5':
				$this->view('activities/if/part5.php');
				break;
			
			case '6':
				$this->view('activities/if/part6.php');
				break;
			
			case '7':
				$this->view('activities/if/part7.php');
				break;
				
			case '8':
				$this->view('activities/if/part8.php');
				break;
			
			default:
				$this->view('activities/if/part1.php');
				break;
		}
	}
}