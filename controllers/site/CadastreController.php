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
		if (!$this->helpers['UserSession']->has()) {
			$this->setLayout(
				'site/shared/layout.php',
				'Cadastre-se',
				array(
					'assets/css/style.css',
					'assets/css/cadastro.css',
				),
				array(
					'assets/libs/jquery/jquery.min.js',
					'assets/js/site/cadastre.js'
				)
			);
			$this->view('site/cadastre/index.php');
		}else{
			
			header('LOCATION: ' . $this->helpers['URLHelper']->getURL() . '/');
		}
	}

	public function cadastreUser()
	{
		$name = $_POST['username'];
		$email = $_POST['email'];
		$password = sha1($_POST['password']);

		$userData = new UserData;
		$user = $userData->getUserEmail($email);

		if($user){
			echo json_encode(array(
				'email' => $email, 
				'result' => "sua conta já existe",
			));
			exit;
		}
		$userCrud = new UserCrud;
		$result   = $userCrud->register($name, $email, $password);

		echo json_encode(array(
			'result' => $result, 
		));

	}
}