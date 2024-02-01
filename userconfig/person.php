<?php 

abstract class Person{

    
    protected $firstname;
    protected $lastname;
    protected $city;
    protected $country;
    protected $phone;
    protected $username;
    protected $email;
    protected $password;
    protected $role;
    public function __construct($firstname,$lastname,$city,
    $country,$phone,$username,$email,$password,$role){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->city = $city;
        $this->country = $country;
        $this->phone = $phone;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    abstract protected function setSession();

    abstract protected function setCookie();


}



?>