<?php
require_once 'person.php';

class SimpleUser extends Person{

    public function __construct($firstname,$lastname,$age,$city,
    $country,$phone,$email,$password,$role){
        parent::__construct($firstname,$lastname,$age,$city,
        $country,$phone,$email,$password,$role);

    }
    

    public function setSession(){
        $_SESSION['role'] = 0;
        $_SESSION['roleName'] = "SimpleUser";
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
    
    public function getCity(){
        return $this->city;
    }

    public function setCity($city){
        $this->city = $city;
    }
    
    public function getCountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country = $country;
    }
    
    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    } 
    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username = $username;
    } 
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
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