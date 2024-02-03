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
            <li><a href="../dashboardComponents/usersDashboard.php"  ><i class="fa fa-users"></i> Users</a></li>
            <li><a href="../dashboardComponents/buynowDashboard.php" ><i class="fa fa-calendar"></i> Purchases</a></li>
            <li><a href="../pages/index.php" ><i class="fa fa-home"></i>Home</a></li>
        </ul>
    </div>
    <div class="container">
       


    <div class="overview">
        <div class="title">
            <i class="fas fa-users-cog"></i>
            <span class="text">Purchases Management</span>
        </div>



        <div class="activity">
          
            <div class="overlay" id="divOne">
                <div class="wrapper">
                    <h2>Purchases edit form</h2><a class="close" href="#">&times;</a>
                    <div class="content">

                    </div>
                </div>
            </div>
            <div class="table">
                <?php
                require_once '../BuyNowMapper.php';
                $mapper = new BuyNowsMapper();
                $id = $_REQUEST['buynow_ID'];
                $buynow = $mapper->editBuyNow($id);
                if (isset($_POST['update'])) {
                    if (
                        isset($_POST['name']) && isset($_POST['lastname']) &&
                        isset($_POST['phone']) && isset($_POST['address']) &&
                        isset($_POST['email']) && isset($_POST['numberPairs'])
                    ) {
                        $data['buynow_ID'] = $id;
                        $data['name'] = $_POST['name'];
                        $data['lastname'] = $_POST['lastname'];
                        $data['phone'] = $_POST['phone'];
                        $data['address'] = $_POST['address'];
                        $data['email'] = $_POST['email'];
                        $data['numberPairs'] = $_POST['numberPairs'];
                        $update = $mapper->updateBuyNow($data);
                        if ($update) {
                            echo "<script>alert('record update successfully');</script>";
                            echo "<script>window.location.href = 'buynowDashboard.php';</script>";
                        } else {
                            echo "<script>alert('record update failed');</script>";
                            echo "<script>window.location.href = 'buynowDashboard.php';</script>";
                        }
                    } else {
                        echo "<script>alert('empty');</script>";
                        echo "<script>window.location.href = 'editUser.php?buynow_ID=$id';</script>";
                    }
                }


                ?>
                <form method="post" action="#" class="book-form">

                    <div class="flex">
                        <div class="inputBox">
                            <span>Name :</span>
                            <input type="text" placeholder="Enter your name" id="name" name="name" value="<?php echo $buynow['name']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Last Name :</span>
                            <input type="text" placeholder="Enter your Last Name" id="lastname" name="lastname" value="<?php echo $buynow['lastname']; ?>">
                        </div>
                       

                        <div class="inputBox">
                            <span>Phone :</span>
                            <input type="text" placeholder="Enter your number" id="phone" name="phone" value="<?php echo $buynow['phone']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Address :</span>
                            <input type="text" placeholder="Enter your address" id="alphanum" name="address" value="<?php echo $buynow['address']; ?>">
                        </div>
                        <div class="inputBox">
                            <span>Email :</span>
                            <input type="email" placeholder="Enter your email" id="email" name="email" value="<?php echo $buynow['email']; ?>">
                        </div>
                       
                        <div class="inputBox">
                            <span>Number of Pairs :</span>
                            <input type="number" placeholder="Number of pairs" id="num" name="numberPairs" value="<?php echo $buynow['numberPairs']; ?>">
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




