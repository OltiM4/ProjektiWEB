<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMEK</title>
</head>
<body>
<header>
        <div class="headeri">
            <a href="index.html">
            <img src="logoOmek.png" alt="">
        </a>
        </div>
        <ul>
        <?php 
            session_start();
            if(isset($_SESSION['role']) && $_SESSION['role']== 1 ){
              ?>
              <li><a href="dashboard.php" data-after="Dashboard">Dashboard</a></li>
              <?php
            }
            ?>
            <li><a href="#" onclick="gotoHome()">Home</a></li>
            <li><a href="#" onclick="gotoAboutUs()">About Us</a></li>
            <li><a href="../pages/news.php" target="_blank">News</a></li>
            <li><a href="#" onclick="gotoContactUs()">Contact Us</a></li>
            <li><a href="../pages/products.php" target="_blank">Products</a></li>
            <li><a href="../pages/login.php" target="_blank">Log In</a></li>
            <?php
            if(!isset($_SESSION['role'])){
              ?>
              <li><a href="login.php" data-after="Contact">Log In</a></li>
              <?php
            }
            ?>
             <?php
            if(isset($_SESSION['role'])){
            ?>
              <li><a href="../loginRegister/logout.php" data-after="Contact">Log Out</a></li>
            <?php
            }
            ?>
            <?php

            if(isset($_SESSION['user']) && $_SESSION['user'] = 'loggedIn'){ 
            ?>
            <li><a href="book.php" data-after="Contact">Book now</a></li>
            <?php
            }
            ?>

        </ul>
    </header>

        <style>
            button {
                font-size: 18px;
                color: #222;
                font-family: inherit;
                font-weight: 800;
                cursor: pointer;
                position: relative;
                border: none;
                background: none;
                text-transform: uppercase;
                transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
                transition-duration: 400ms;
                transition-property: color;
            }
    
            button:focus,
            button:hover {
                color: #222;
            }
    
            button:focus:after,
            button:hover:after {
                width: 100%;
                left: 0%;
            }
    
            button:after {
                content: "";
                pointer-events: none;
                bottom: -2px;
                left: 50%;
                position: absolute;
                width: 0%;
                height: 2px;
                background-color: black;
                transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
                transition-duration: 400ms;
                transition-property: width, left;
            }
        </style>
</body>
</html>