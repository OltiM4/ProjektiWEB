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
       
    
<div class="overview">
    <div class="title">
        <i class="fas fa-users-cog"></i>
        <span class="text">Users</span>
    </div>



    <div class="activity">
        <div class="boxx">
            <a class="submitAdd" href="addUser.php">Add User</a>
        </div>
        <div class="overlay" id="divOne">
            <div class="wrapper">
                <h2>User adding form</h2>
                <div class="content">
                   
                </div>
            </div>
        </div>
        <div class="table">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th class="heads">ID</th>
                        <th class="heads"> Name</th>
                        <th class="heads">Last Name</th>
                        <th class="heads">City</th>
                        <th class="heads">Country</th>
                        <th class="heads">Phone</th>
                        <th class="heads">Username</th>
                        <th class="heads">Email</th>
                        <th class="heads">Role</th>
                        <th class="heads">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once '../userMapper.php';
                    $model = new UserMapper();
                    $rows = $model->getAllUsers();
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td class="rows">
                                <?php echo $row['userid'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['firstname']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['lastname']; ?>
                            </td>
                            
                            <td class="rows">
                                <?php echo $row['city'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['country']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['phone']; ?>
                            </td>
                            
                            <td class="rows">
                                <?php echo $row['username'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['email']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['role']; ?>
                            </td>
                            <td class="rows">
                                &nbsp;<a
                                    href="editUser.php?userid=<?php echo $row['userid']; ?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                <a
                                    href="deleteUser.php?userid=<?php echo $row['userid']; ?>"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                        <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</body>

</html>

