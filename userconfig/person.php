<?php 

abstract class Person{

    
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $username;
    protected $password;
    protected $role;
    public function __construct($firstname,$lastname,$email,$username,$password,$role){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    abstract protected function setSession();

    abstract protected function setCookie();


}



?>