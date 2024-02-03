<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sideDashboard.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/userDashboard.css?v=<?php echo time();?>">
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
            <span class="text">Bookings Management</span>
        </div>



        <div class="activity">
          
            <div class="overlay" id="divOne">
                <div class="wrapper">
                    <h2>Bookings edit form</h2><a class="close" href="#">&times;</a>
                    <div class="content">

                    </div>
                </div>
            </div>
            <div class="table">
                <?php
                require_once '../bookingsMapper.php';
                $mapper = new BookingsMapper();
                $id = $_REQUEST['booking_ID'];
                $booking = $mapper->editBooking($id);
                if (isset($_POST['update'])) {
                    if (
                        isset($_POST['name']) && isset($_POST['email']) &&
                        isset($_POST['phone']) && isset($_POST['address']) &&
                        isset($_POST['destination']) && isset($_POST['guestNumber']) &&
                        isset($_POST['check_in_date']) && isset($_POST['check_out_date'])
                    ) {
                        $data['booking_ID'] = $id;
                        $data['name'] = $_POST['name'];
                        $data['email'] = $_POST['email'];
                        $data['phone'] = $_POST['phone'];
                        $data['address'] = $_POST['address'];
                        $data['destination'] = $_POST['destination'];
                        $data['guestNumber'] = $_POST['guestNumber'];
                        $data['check_in_date'] = $_POST['check_in_date'];
                        $data['check_out_date'] = $_POST['check_out_date'];
                        $update = $mapper->updateBooking($data);
                        if ($update) {
                            echo "<script>alert('record update successfully');</script>";
                            echo "<script>window.location.href = 'bookingsDashboard.php';</script>";
                        } else {
                            echo "<script>alert('record update failed');</script>";
                            echo "<script>window.location.href = 'bookingsDashboard.php';</script>";
                        }
                    } else {
                        echo "<script>alert('empty');</script>";
                        echo "<script>window.location.href = 'editUser.php?booking_ID=$id';</script>";
                    }
                }


                ?>
                <form method="post" action="#" class="book-form">

                    <div class="flex">
                        <div class="inputBox">
                            <span>name :</span>
                            <input type="text" placeholder="enter your name" id="name" name="name" value="<?php echo $booking['name']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="enter your email" id="email" name="email" value="<?php echo $booking['email']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>phone :</span>
                            <input type="text" placeholder="enter your number" id="phone" name="phone" value="<?php echo $booking['phone']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="enter your address" id="alphanum" name="address" value="<?php echo $booking['address']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>where to :</span>
                            <input type="text" placeholder="place you want to visit" id="text" name="destination" value="<?php echo $booking['destination']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>how many :</span>
                            <input type="number" placeholder="number of guests" id="num" name="guestNumber" value="<?php echo $booking['guestNumber']; ?>">
                        </div>
                        
                        <div class="inputBox">
                            <span>arrivals :</span>
                            <input  name="check_in_date" placeholder ="2020-20-01" type="date"  value="<?php echo $booking['check_In_date']; ?>">
                        </div>
                      
                        <div class="inputBox">
                            <span>leaving :</span>
                            <input name="check_out_date" type="date"  value="<?php echo $booking['check_out_date']; ?>">
                        </div>
                        
                    </div>

                    <input type="submit" value="Update" class="btn" name="update" onclick="validoMeRegex()">

                </form>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>




