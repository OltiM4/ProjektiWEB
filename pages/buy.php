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
   
<!-- header section starts  -->
    <?php include '../include/footer.php'; ?>
  <!-- End Header -->

<div class="heading" style="background:url(../img/header-bg-3.png) no-repeat">
   <h1>BUY NOW</h1>
</div>

<!-- booking section starts  -->

<section class="form">

   <h1 class="heading-title">BEST PRICES !</h1>
   <?php
            require_once '../BuyNowMapper.php';
            require_once '../buynowconfig/buynow.php';
            if (isset($_POST['buyNow'])) {
                $name = $_POST['name'];
                $lastName = $_POST['lastName'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $pairNumber = $_POST['pairNumber'];
                $buynow = new BuyNow(
                  $name,$lastName, $phone,$address,$email,$pairNumber
                );
                $mapper = new BuyNowsMapper();
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
            <input type="number" placeholder="Number of pairs" id="num" name="ClothingNumber" required>
         </div>
      </div>

      <input type="submit" value="Submit" class="btn" name="bookNow" onclick="validateBook()">

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