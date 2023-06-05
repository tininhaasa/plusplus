<?php

/**
*
* Controller do site.
*
* @author Emprezaz.com
*
**/
class LoginController extends Controller
{

	//home header
	public function index()
	{		
		if (!$this->helpers['UserSession']->has()) {

		
			$this->setLayout(
				'site/shared/layout.php',
				'Entrar',
				array(
					'assets/css/style.css',
					'assets/css/login.css'
				),
				array(
					'assets/libs/jquery/jquery.min.js',
					'assets/js/site/login.js'
				)
			);
			$this->view('site/login/index.php');
		}else{
			
			header('LOCATION: ' . $this->helpers['URLHelper']->getURL() . '/atividades');
		}
	}

	public function loginUser()
	{
		if(isset($_POST['email'])){
			
			$email = $_POST['email'];
			$password = $_POST['password'];

			$login  = new UserData;
			$result = $login->loginUser($email, $password);

			echo json_encode(array(
				'result'	=> $result,
				'url'	 	=> isset($_COOKIE['url']) ? $_COOKIE['url'] : false
			));
		}
	}
	
	// Logout adm
	public function logoutUser()
	{

		$this->helpers['UserSession']->deleteUser();
		header('Location: ' . $this->helpers['URLHelper']->getURL('/'));
	}
}