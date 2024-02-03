<?php


class BuyNow
{
    protected $name;
    protected $lastName;
    protected $phone;
    protected $address;
    protected $email;
    protected $numberPairs;
    
    public function __construct($name,$lastName,$phone,$address, $email, $numberPairs)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->address = $address;
        $this->email = $email;
        $this->numberPairs = $numberPairs;
        
    }
    public function setSession(){
        $_SESSION['buynow'] = "buynow";
    }   
    public function setCookie(){
        setcookie("name", $this->getBuyNowClientName(), time() + 2 * 24 * 60 * 60);
    }

    public function getBuyNowClientName(){
        return $this->name;
    }
    public function getBuyNowClientLastName(){
        return $this->lastName;
    }
    public function getBuyNowClientPhone(){
        return $this->phone;
    }
    public function getBuyNowClientEmail(){
        return $this->email;
    }
    public function getBuyNowClientAddress(){
        return $this->address;
    }
    public function getBuyNowNumberPairs(){
        return $this->numberPairs;
    }
    
 


}

?>