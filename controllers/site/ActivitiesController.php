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
		if ($this->helpers['UserSession']->has()) {

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

		if ($this->helpers['UserSession']->has()) {
			$this->setLayout(
				'site/shared/layout.php',
				'Página home',
				array(
					'assets/css/actividies/style.css',
					'assets/css/progress.css',
				),
				array(
					'assets/libs/jquery/jquery.min.js',
					'assets/js/site/actividies/script.js',
					'assets/js/site/actividies/intro.js',
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
		if ($this->helpers['UserSession']->has()) {

			$this->setLayout(
				'site/shared/layout.php',
				'Variáveis',
				array(
					'assets/css/progress.css',
					'assets/css/actividies/style.css',
				),
				array(
					'assets/libs/jquery/jquery.min.js',
					'assets/js/site/actividies/main.js'
				)
			);
		
					$this->view('activities/variables/index.php', array('part' => $params[0], ));
			
				
		}else{
			
			header('LOCATION: ' . $this->helpers['URLHelper']->getURL() . '/');
		}
	}

	public function ifs($params)
	{
		if ($this->helpers['UserSession']->has()) {

			$this->setLayout(
				'site/shared/layout.php',
				'Estrutura de Seleção',
				array(
					'assets/css/actividies/style.css',
					'assets/css/progress.css',
				),
				array(
					'assets/libs/jquery/jquery.min.js',
					'assets/libs/jquery-ui/jquery-ui.min.js',
					'assets/js/site/actividies/if.js'
				)
			);
			$this->view('activities/if/index.php', array('part' => $params[0], ));
				
		}else{
			
			header('LOCATION: ' . $this->helpers['URLHelper']->getURL() . '/');
		}
	}
}