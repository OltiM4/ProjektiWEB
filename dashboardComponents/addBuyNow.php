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
            <li><a href="usersDashboard.php"  ><i class="fa fa-users"></i> Users</a></li>
            <li><a href="bookingsDashboard.php" ><i class="fa fa-calendar"></i> Bookings</a></li>
            <li><a href="../pages/index.php" ><i class="fa fa-home"></i>Home</a></li>
        </ul>
    </div>
    <div class="container">
   
<div class="containerr">
    <?php
    require_once '../bookingsMapper.php';
    require_once '../bookingsconfig/bookings.php';


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $destination = $_POST['destination'];
        $guestNumber = $_POST['guestNumber'];
        $check_in_date = $_POST['check_in_date'];
        $check_out_date = $_POST['check_out_date'];
            $booking = new Bookings(
                $name, $email, $phone,$address,$destination,$guestNumber,$check_in_date,$check_out_date
            );
          
            $mapper = new BookingsMapper();
            $mapper->insertBooking($booking);
            header('Location:bookingsDashboard.php');
        
    }

    ?>
    <form method="POST" action="#" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" id="name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" id="email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="text" placeholder="enter your number" id="phone" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" id="alphanum" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" id="text" name="destination">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" id="num" name="guestNumber">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" class="date" name="check_in_date">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" class="date" name="check_out_date">
            </div>
        </div>

        <input type="submit" value="Submit" class="btn" name="submit" onclick="validoMeRegex()">

    </form>
</div>
</body>

</html>










