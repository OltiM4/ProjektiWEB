<?php
require_once '../ProjektiWEB/databaseConfig.php';
class UserMapper extends Database
{

    private $conn;
    public function __construct(){
        $this->conn = $this->getConnection();
    }
    public function getUserById($id)
    {

        $data = null;

        $query = "SELECT * FROM user WHERE userid = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function getUserByUsername($username)
    {
        $data = null;
        $query = "SELECT * FROM user WHERE username = '$username'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    
    public function getAllUsers()
    {
        $data = null;
        $query = "SELECT * FROM user";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insertUser($user)
    {
        $firstname = $user->getFirstname();
        $lastname = $user->getLastName();
        $city = $user->getCity();
        $country = $user->getCountry();
        $phone = $user->getPhone();//
        $username= $user->getUsername();
        $email = $user->getEmail();
        $password = hash("sha512",$user->getPassword()); 
        $role = $user->getRole();
        $query = "INSERT INTO user(firstname, lastname,city,country,phone,username,email, password, role)
         VALUES ('$firstname','$lastname', '$city','$country','$phone','$username', '$email', '$password','$role')";
        if ($sql = $this->conn->query($query)) {
            $_SESSION['message']= "Admin/User added succesfully";
            echo "<script>alert('records added successfully');</script>";
        } else {
            $_SESSION['message']= "Admin/User not added";
            echo "<script>alert('failed');</script>";
        }
    }

    



    public function editUser($userid)
    {

        $data = null;

        $query = "SELECT * FROM user WHERE userid = '$userid'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function updateUser($data)
    {
        $userid = $data['userid'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $city = $data['city'];
        $country = $data['country'];
        $phone = $data['phone'];
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $role = $data['role'];

        $query = "update user set firstname='$firstname', lastname='$lastname', city='$city',country='$country', phone='$phone'
        ,username='$username',email='$email', password='$password',role='$role' where userid='$userid'";


        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($userid){
 
        $query = "DELETE FROM user where userid = '$userid'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }





}


