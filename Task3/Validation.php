<?php

class Validation{
    private $userName;
    private $userEmail;
    private $userPassword;
    private $userConfirmPassword;
    
    function __construct($name, $email, $pass, $conPass){
        $this->userName = $name;
        $this->userEmail = $email;
        $this->userPassword = $pass;
        $this->userConfirmPassword = $conPass;
    }

    public function getName(){
        return $this->userName;
    }
    public function getEmail()
    {
        return $this->userEmail;
    }

    public function getPass(){
        return $this->userPassword;
    }

    public function setName($name){
        $this->userName = $name;
    }

    public function setEmail($email){
        $this->userEmail = filter_var($email, FILTER_VALIDATE_EMAIL) == 1  ? $email : "Not Valid Email";
    }

    public function setPass($password){
        $this->userPassword = $password;
    }

    public function samePass(){
        if($this->userPassword == $this->userConfirmPassword){
            return "Valid Password";
        }
        return "Invalid Password";
    }

}

$user = new Validation("diaa012","diaa@d.com",123456,123456);
echo $user->samePass();
echo "<pre>";
var_dump($user);
echo "</pre>";
