<?php

/**
 * 
 * Data do dashboard
 * 
 * @author Emprezaz
 * 
 **/

class UserCrud{
    
    private $pdoQuery;
    private $pdoCrud;
    private $userSession;

    public function __construct()
    {

        $this->pdoQuery = new PDOQuery;
        $this->pdoCrud = new PDOCrud;
        $this->userSession = new UserSession;
    }

    public function register($name, $email, $password)
    {
        $pdo = array(
            ':name' => $name, 
            ':email' => $email, 
            ':password' => $password, 
        );

        $colums = "username, email, password";
        $values = ":name, :email, :password";


        $result = $this->pdoCrud->insert('users', $colums, $values, $pdo);

        $this->userSession->saveUser(array(
            'id'             => $result,
            'username'       => $name,
            'email'          => mb_strtolower($email),
        ));

        return $result;
    }

}