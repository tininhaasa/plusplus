<?php

/**
 * 
 * Data do dashboard
 * 
 * @author Emprezaz
 * 
 **/

class UserData
{

    private $pdoQuery;
    private $userSession;

    public function __construct()
    {

        $this->pdoQuery = new PDOQuery;
        $this->userSession = new UserSession;
    }

    public function getUserEmail($email)
    {
        $sql = $this->pdoQuery->fetch("SELECT id FROM users u WHERE u.email = :email", array(
            ':email'    => mb_strtolower($email)
        ));

        return $sql;
    }

    public function getDataById($id)
    {
        $sql = $this->pdoQuery->fetch("SELECT u.* FROM users u
        WHERE u.id = :id", array(
            ':id' => $id
        ));

        return $sql;
    }    
    
    public function loginUser($email, $password)
    {

        if ($this->setLogin($email, hash('sha1', $password))) {

            return true;
        }

        return false;
    }

    private function setLogin($email, $password)
    {
        $data     = $this->getData($email);
        $dataUser = $this->checkUser($email, $password);

        if ($data and $dataUser) {
            $this->saveData($data);
            return true;
        }

        return false;
    }

    public function getData($email, $limit = "")
    {
        $pag = ($limit != "")? "LIMIT " . $limit : "" ;
        $data = $this->pdoQuery->fetch('SELECT * FROM users u WHERE u.email = :email'. $pag, array(
            ':email' => mb_strtolower($email),
        ));

        return $data;
    }

    public function checkUser($email, $password)
    {
        return $this->pdoQuery->fetch("SELECT * FROM users u WHERE u.email = :email AND u.password = :password", array(
            ':email'   => mb_strtolower($email),
            ':password' => $password
        ));
    }

    private function saveData(array $data)
    {
        $pdo = array(
            'id'         => $data['id'],
            'username'   => $data['username'],
            'email'      => $data['email'],
        );
        $this->userSession->saveUser($pdo);
    }
}