<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sideDashboard.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/userDashboard.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css">
 

    



    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Hi, Admin</h1>
        </div>
        <ul>
            <li> <a href="../pages/dashboard.php" ><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="../dashboardComponents/usersDashboard.php"  ><i class="fa fa-users"></i> Users</a></li>
            <li><a href="../dashboardComponents/buynowDashboard.php" ><i class="fa fa-calendar"></i> Purchases</a></li>
            <li><a href="../pages/index.php" ><i class="fa fa-home"></i>Home</a></li>
        </ul>
    </div>
    <div class="container">
<div class="containerr">
    <?php
    require_once '../BuyNowMapper.php';
    require_once '../buynowconfig/buynow.php';


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $numberPairs = $_POST['numberPairs'];
            $buynow = new BuyNow(
                $name,$lastname, $phone,$address,$email,$numberPairs
            );

            $mapper = new BuyNowsMapper();
            $mapper->insertBuyNow($buynow);
            header('Location:buynowDashboard.php');
        
    }

    ?>
    <form method="POST" action="#" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Name :</span>
                <input type="text" placeholder="Enter your name" id="name" name="name">
            </div>
            <div class="inputBox">
                <span>Last Name :</span>
                <input type="text" placeholder="Enter your last name" id="lastname" name="lastname">
            </div>
            
            <div class="inputBox">
                <span>Phone :</span>
                <input type="text" placeholder="Enter your number" id="phone" name="phone">
            </div>
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="Enter your address" id="alphanum" name="address">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="text" placeholder="Enter your email" id="email" name="email">
            </div>
            <div class="inputBox">
                <span>Number of Pairs :</span>
                <input type="number" placeholder="enter number of pairs" id="num" name="numberPairs">
            </div>
            
        </div>

        <input type="submit" value="Submit" class="btn" name="submit" onclick="validoMeRegex()">

    </form>
</div>
</body>

</html>










