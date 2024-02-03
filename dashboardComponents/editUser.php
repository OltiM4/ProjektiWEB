<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userDashboard.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/sideDashboard.css?v=<?php echo time();?>">
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
       


    <div class="overview">
        <div class="title">
            <i class="fas fa-users-cog"></i>
            <span class="text">Users Management</span>
        </div>



        <div class="activity">
            <div class="boxx">
                <a class="submitAdd" href="addUser.php">Add new User</a>
            </div>
            <div class="overlay" id="divOne">
                <div class="wrapper">
                    <h2>User adding form</h2><a class="close" href="#">&times;</a>
                    <div class="content">

                    </div>
                </div>
            </div>
            <div class="table">
                <?php
                require_once '../UserMapper.php';
                $mapper = new UserMapper();
                $id = $_REQUEST['userid'];
                $user = $mapper->editUser($id);
                if (isset($_POST['update'])) {
                    if (
                        isset($_POST['firstname']) && isset($_POST['lastname']) &&
                        isset($_POST['city']) && isset($_POST['country']) &&
                        isset($_POST['phone']) && isset($_POST['username']) &&
                        isset($_POST['email']) && isset($_POST['password']) &&
                        isset($_POST['role']) 
                    ) {
                        $data['userid'] = $id;
                        $data['firstname'] = $_POST['firstname'];
                        $data['lastname'] = $_POST['lastname'];
                        $data['city'] = $_POST['city'];
                        $data['country'] = $_POST['country'];
                        $data['phone'] = $_POST['phone'];
                        $data['username'] = $_POST['username'];
                        $data['email'] = $_POST['email'];
                        $data['password'] = $_POST['password'];
                        $data['role'] = $_POST['role'];
                        $update = $mapper->updateUser($data);
                        if ($update) {
                            echo "<script>alert('record update successfully');</script>";
                            echo "<script>window.location.href = 'usersDashboard.php';</script>";
                        } else {
                            echo "<script>alert('record update failed');</script>";
                            echo "<script>window.location.href = 'usersDashboard.php';</script>";
                        }
                    } else {
                        echo "<script>alert('empty');</script>";
                        echo "<script>window.location.href = 'editUser.php?userid=$id';</script>";
                    }
                }


                ?>
                <form method="POST" action="#" class="reg-form">

                    <div class="flex">
                        <div class="inputBox">
                            <span>First Name :</span>
                            <input type="text" placeholder="enter your first name" id="fname" name="firstname" value="<?php echo $user['firstname']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Last Name :</span>
                            <input type="text" placeholder="enter your last name" id="lname" name="lastname" value="<?php echo $user['lastname']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>City :</span>
                            <input type="text" placeholder="enter your city" id="city" name="city" value="<?php echo $user['city']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Country :</span>
                            <input type="text" placeholder="enter your country" id="country" name="country" value="<?php echo $user['country']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Phone :</span>
                            <input type="number" placeholder="enter your number" id="phone" name="phone" value="<?php echo $user['phone']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Create a username :</span>
                            <input type="text" placeholder="enter your new username" id="username" name="username" value="<?php echo $user['username']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Enter an email </span>
                            <input type="email" placeholder="enter your email" id="email" name="email"  value="<?php echo $user['email']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Enter an password</span>
                            <input type="password" placeholder="enter password" id="password" name="password" value="<?php echo $user['password']; ?>" >
                        </div>
                        <div class="inputBox">
                            <span>Role </span>
                            <input type="text" placeholder="enter your new role" id="role" name="role"  value="<?php echo $user['role']; ?>">
                        </div>

                    </div>

                    <input type="submit" value="Update" class="btn" name="update" onclick="validoMeRegex()">

                </form>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>




