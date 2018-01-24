<?php

class User{
    private $username;
    private $password;
    private $firstname;
    private $lastname;
    private $isLoggedOn;
    
    public function __construct($username, $password, $firstname, $lastname, $log){
        $this->username = $username;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->isLoggedOn = $log;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getIsLoggedOn()
    {
        return $this->isLoggedOn;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setIsLoggedOn($isLoggedOn)
    {
        $this->isLoggedOn = $isLoggedOn;
    }
    
}