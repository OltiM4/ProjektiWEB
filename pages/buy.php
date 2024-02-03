<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/buy.css">
  <link rel="icon" href="../foto/logoOmek.png" type="image/png">
  <title>BUY</title>
</head>


<body>


<div class="heading" style="background:url(../img/header-bg-3.png) no-repeat">
   <h1>BUY NOW</h1>
</div>


<section class="form">

   <h1 class="heading-title">BEST PRICES !</h1>
   <?php
            require_once '../BuyNowMapper.php';
            require_once '../buynowconfig/buynow.php';
            if (isset($_POST['buynow'])) {
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $numberPairs = $_POST['numberPairs'];
                $buynow = new BuyNow(
                  $name,$lastname, $phone,$address,$email,$numberPairs
                );
                $mapper = new BuyNowMapper();
                $mapper->insertBuyNow($buynow);
            }

            ?>
   <form method="post" action="#" class="form-form">

      <div class="flex">
         <div class="inputBox">
            <span>First name :</span>
            <input type="text" placeholder="Enter your name" id="name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Last name :</span>
            <input type="text" placeholder="Enter your last name" id="lastname" name="lastname" required>
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="text" placeholder="Enter your number" id="phone" name="phone" required>
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="Enter your address" id="alphanum" name="address" required>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Enter your email" id="email" name="email" required>
         </div>
         <div class="inputBox">
            <span>How many :</span>
            <input type="number" placeholder="Number of pairs" id="num" name="numberPairs" required>
         </div>
      </div>

      <input type="submit" value="Submit" class="btn" name="buynow" onclick="validateBook()">

   </form>

</section>

<script src="../js/app.js"></script>

</body>
</html>