<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="buy.css">
  <link rel="icon" href="../img/logo.png" type="image/png">
  <title>Book</title>
</head>


<body>
   
<!-- header section starts  -->
    <?php include '../include/header.php'; ?>
  <!-- End Header -->

<div class="heading" style="background:url(../img/header-bg-3.png) no-repeat">
   <h1>BUY NOW</h1>
</div>

<!-- booking section starts  -->

<section class="form">

   <h1 class="heading-title">BEST PRICES !</h1>
   <?php
            require_once '../bookingsMapper.php';
            require_once '../bookingsconfig/bookings.php';
            if (isset($_POST['bookNow'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['check_out_date'];
                $destination = $_POST['destination'];
                $guestNumber = $_POST['guestNumber'];
                $check_in_date = $_POST['check_in_date'];
                $check_out_date = $_POST['check_out_date'];
                $booking = new Bookings(
                  $name, $email, $phone,$address,$destination,$guestNumber,$check_in_date,$check_out_date
                );
                $mapper = new BookingsMapper();
                $mapper->insertBooking($booking);
            }

            ?>
   <form method="post" action="#" class="form-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" id="name" name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" id="email" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="text" placeholder="enter your number" id="phone" name="phone" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" id="alphanum" name="address" required>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" id="text" name="destination" required>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" id="num" name="guestNumber" required>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" class="date" name="check_in_date" required>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" class="date" name="check_out_date" required>
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="bookNow" onclick="validateBook()">

   </form>

</section>

<!-- booking section ends -->

<!-- footer section starts  -->

<?php include '../include/footer.php'; ?>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="../javascript/app.js"></script>

</body>
</html>

