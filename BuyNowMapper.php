<?php
require_once 'databaseConfig.php';

class BuyNowMapper extends Database
{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getBuyNowByID($buynow_ID)
    {
        $data = null;

        $query = "SELECT * FROM buynows WHERE buynow_ID = '$buynow_ID'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;

    }

    public function getBuyNowByClientName($name)
    {
        $data = null;
        $query = "SELECT * FROM  buynows WHERE name = '$name'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function getAllBuyNow()
    {
        $data = null;
        $query = "SELECT * FROM buynows";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insertBuyNow($buynow)
    {
        $name = $buynow->getBuyNowClientName();
        $lastname = $buynow->getBuyNowClientLastName();
        $phone = $buynow->getBuyNowClientPhone();
        $address = $buynow->getClientAddress();
        $email = $buynow->getBuyNowClientEmail();
        $numberPairs = $buynow->getBuyNowNumberPairs();
        

        $query = "INSERT INTO buynows(name,lastname,phone,address,name,numberPairs)
        VALUES ('$name','$lastname','$phone','$email','$address','$numberPairs')";
        if ($sql = $this->conn->query($query)) {
            echo "<script>alert('records added successfully');</script>";
        } else {
            echo "<script>alert('failed');</script>";
        }
    }
    public function editBuyNow($buynow_ID)
    {

        $data = null;

        $query = "SELECT * FROM buynows WHERE buynow_ID = '$buynow_ID'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    
    public function updateBuyNow($data)
    {
        $query = "UPDATE buynows SET name='$data[name]',lastname='$data[lastname]',phone='$data[phone]',address='$data[address]' email='$data[email]',numberPairs='$data[numberPairs]',  WHERE buynow_ID='$data[buynow_ID]'";
 
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }
    
    public function deleteBuyNow($buynow_ID){
 
        $query = "DELETE FROM buynows where buynow_ID = '$buynow_ID'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }


}
