<?php
require_once 'person.php';

class AdminUser extends Person{

    public function __construct($firstname,$lastname,$email,
    $username,$password,$role){
        parent::__construct($firstname,$lastname,$email,$username,$password,$role);

        
    }

    public function setSession(){
        $_SESSION['role'] = 1;
        $_SESSION['roleName'] = "Menaxhues";
        $_SESSION['user'] = 'loggedIn';
    }   

    public function setCookie(){
        setcookie("username", $this->getFirstname(), time() + 2 * 24 * 60 * 60);
    }

    public function getFirstname(){
        return $this->firstname;
    }
    public function setFirstName($firstname){
        $this->firstname = $firstname;
    }


    public function getLastName(){
        return $this->lastname;
    }

    public function setLastName($lastname){
        $this->lastname = $lastname;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username = $username;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

}



?>