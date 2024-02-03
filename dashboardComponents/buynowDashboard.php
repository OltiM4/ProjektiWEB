<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userDashboard.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/sideDashboard.css?v=<?php echo time();?>">
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
            <li><a href="buynowDashboard.php" ><i class="fa fa-calendar"></i> Bookings</a></li>
            <li><a href="../pages/index.php" ><i class="fa fa-home"></i>Home</a></li>
        </ul>
    </div>
    <div class="container">
       

    <div class="overview">
    <div class="title">
        <i class="fas fa-users-cog"></i>
        <span class="text">Bookings</span>
    </div>



    <div class="activity">
        <div class="boxx">
            <a class="submitAdd" href="addBuyNow.php">Add new Purchase</a>
        </div>
        <div class="overlay" id="divOne">
            <div class="wrapper">
                <h2>Purchases adding form</h2>
                <div class="content">
                   
                </div>
            </div>
        </div>
        <div class="table">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th class="heads">ID</th>
                        <th class="heads">Name</th>
                        <th class="heads">LastName</th>
                        <th class="heads">Phone</th>
                        <th class="heads">Address</th>
                        <th class="heads">Email</th>
                        <th class="heads">Number of Pairs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once '../BuyNowMapper.php';
                    $model = new BuyNowsMapper();
                    $rows = $model->getAllBuyNows();
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td class="rows">
                                <?php echo $row['buynow_ID'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['name']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['lastname']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['phone'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['address']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['email']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['numberPairs']; ?>
                            </td>
                            <td class="rows">
                                &nbsp;<a
                                    href="editBuyNow.php?booking_ID=<?php echo $row['buynow_ID']; ?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;
                                <a
                                    href="deleteBuyNow.php?booking_ID=<?php echo $row['buynow_ID']; ?>"><i
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
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</body>

</html>



