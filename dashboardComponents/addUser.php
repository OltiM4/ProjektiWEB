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
            <li> <a href="../pages/dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="usersDashboard.php"><i class="fa fa-users"></i> Users</a></li>
            <li><a href="bookingsDashboard.php"><i class="fa fa-calendar"></i> Bookings</a></li>
            <li><a href="../pages/index.php"><i class="fa fa-home"></i>Home</a></li>
        </ul>
    </div>
    <div class="container">


        <div class="containerr">
            <?php
            require_once '../userMapper.php';
            require_once '../userconfig/simpleUser.php';
            require_once '../userconfig/adminUser.php';

            

            if (isset($_POST['submit'])) {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $city = $_POST['city'];
                $country = $_POST['country'];
                $phone = $_POST['phone'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = $_POST['role'];
                if ($role == 1) {
                    $user = new AdminUser(
                        $firstname,
                        $lastname,
                        $city,
                        $country,
                        $phone,
                        $username,
                        $email,
                        $password,
                        $role
                    );
                    $user->setSession();
                    $mapper = new UserMapper();
                    $mapper->insertUser($user);
                    header('Location: usersDashboard.php#');
                } else {
                    $user = new SimpleUser(
                        $firstname,
                        $lastname,
                        $city,
                        $country,
                        $phone,
                        $username,
                        $email,
                        $password,
                        $role
                    );
                    $user->setSession();
                    $mapper = new UserMapper();
                    $mapper->insertUser($user);
                    header('Location: usersDashboard.php#');
                }


            }

            ?>
            <form method="POST" action="#" class="reg-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>First Name :</span>
                        <input type="text" placeholder="enter your first name" id="fname" name="firstname">
                    </div>
                    <div class="inputBox">
                        <span>Last Name :</span>
                        <input type="text" placeholder="enter your last name" id="lname" name="lastname">
                    </div>
                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" placeholder="enter your city" id="city" name="city">
                    </div>
                    <div class="inputBox">
                        <span>Country :</span>
                        <input type="text" placeholder="enter your country" id="country" name="country">
                    </div>
                    <div class="inputBox">
                        <span>Phone :</span>
                        <input type="number" placeholder="enter your number" id="phone" name="phone">
                    </div>
                    <div class="inputBox">
                        <span>Create a username :</span>
                        <input type="text" placeholder="enter your new username" id="username" name="username">
                    </div>
                    <div class="inputBox">
                        <span>Enter an email </span>
                        <input type="email" placeholder="enter your email" id="email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>Enter an password</span>
                        <input type="password" placeholder="enter password" id="password" name="password">
                    </div>

                    <div class="inputBox">
                        <span>Enter an Role</span>
                        <input type="text" placeholder="enter password" id="password" name="role">
                    </div>

                </div>

                <input type="submit" value="register" class="btn" name="submit" onclick="validoMeRegex()">

            </form>
        </div>
    </div>

</body>

</html>