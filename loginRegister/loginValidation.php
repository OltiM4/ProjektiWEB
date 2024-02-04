<?php
session_start();
include_once '../UserMapper.php';
include_once '../userconfig/adminUser.php';
include_once '../userconfig/simpleUser.php';

if (isset($_POST['login'])) {
    $login = new LoginLogic($_POST);
    $login->verify();
} else if (isset($_POST['signup'])) {
    $signup = new SignUpLogic($_POST);
    $signup->signupUser();
}
else{
    header("Location: ../pages/signup.php");
}

class LoginLogic
{

    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verify()
    {
        if ($this->verifyEmptyData($this->username, $this->password)) {
            header("Location:../pages/login.php");
        } else if ($this->verifyCorrectData($this->username, $this->password)) {
            header("Location: ../pages/index.php");
        } else {
            header("Location: ../pages/login.php");
        }
    }

    private function verifyEmptyData($username, $password)
    {

        if (empty($username) || empty($password)) {
            return true;
        }

        return false;
    }
    
    private function verifyCorrectData($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0)
            return false;
        else if (hash("sha512", $user['password'])) {
            if ($user['role'] == 1) {
                $adminUser = new AdminUser($user['firstname'],$user['lastname'], $user['email'],
            $user['username'],$user['password'],$user['confirmPassword'],1);
                $adminUser->setSession();
            } else {
                $simpleUser = new SimpleUser($user['firstname'],$user['lastname'], $user['email'],
                $user['username'],$user['password'],$user['confirmPassword'],0);
                $simpleUser->setSession();
            }
            return true;
        } else
            return false;

    }

}


class SignUpLogic
{

    private $firstname = "";
    private $lastname = "";
    private $email = "";
    private $username = "";
    private $password = "";
    private $confirmPassword = "";


    public function __construct($formData)
    {
        $this->firstname = $formData['firstname'];
        $this->lastname = $formData['lastname'];
        $this->email = $formData['email'];
        $this->username = $formData['username'];
        $this->password = $formData['password'];
        $this->confirmPassword = $formData['confirmPassword'];

    }

    public function signupUser()
    {
           if(empty($this->firstname) || empty($this->lastname) || empty($this->email)|| empty($this->username)|| empty($this->password) ||
           empty ($this->confirmPassword)) {
            header("Location: ../pages/signup.php");
}
            else if ($this->username === "olti" || $this->username === "edi") {
            $user = new AdminUser($this->firstname,$this->lastname,$this->email,
            $this->username,$this->password,$this->password,$this->confirmPassword,1);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location: ../pages/login.php"); //nese e lo login po me prishet regexi, nese e lo register logjikisht mas register duhet me t direktu ne login
        }
        else{
            $user = new SimpleUser($this->firstname,$this->lastname,$this->email,
            $this->username,$this->password,$this->confirmPassword,0);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location: ../pages/login.php");
        }
    }




}



?>