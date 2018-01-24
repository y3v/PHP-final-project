<?php
/*@Entity @Table(name="user")*/

class User{
    /*@id @Column(type="integer") @GeneratedValue*/
    private $id;
    
    /*@Column(type="string")*/
    private $username;
    
    /*@Column(type="string")*/
    private $password;
    
    /*@Column(type="string")*/
    private $firstname;
    
    /*@Column(type="string")*/
    private $lastname;
    
    /*@Column(type="boolean")*/
    private $isLoggedOn;
    
    public function __construct($username, $password, $firstname, $lastname, $log){
        $this->username = $username;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->isLoggedOn = $log;
    }

    
    public function getId()
    {
        return $this->id;
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

    public function setId($id)
    {
        $this->id = $id;
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