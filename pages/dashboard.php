<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sideDashboard.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css">
    <link rel="icon" href="../foto/logoOmek.png" type="image/png">
    <title>Admin Panel</title>
</head>


<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Hi, Admin</h1>
        </div>
        <ul>
            <li> <a href="dashboard.php" ><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="../dashboardComponents/usersDashboard.php"  ><i class="fa fa-users"></i> Users</a></li>
            <li><a href="../dashboardComponents/buynowDashboard.php" ><i class="fa fa-calendar"></i>Purchases</a></li>
            <li><a href="index.php" ><i class="fa fa-home"></i>Home</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">

                <marquee><b>OMEK</b> ~ Let's go shopping together! Our personal shoppers help clients plan their shopping, making sure they find everything on their list.  Copyright © 2022 VD trip. All rights reserved</marquee>
                
                
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Visitors</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Purchases</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Customers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>Enisi</td>
                            <td>Spanje</td>
                            <td>$1500</td>
                        </tr>
                        <tr>
                            <td>Blendi</td>
                            <td>Norvegji</td>
                            <td>$2000</td>
                        </tr>
                        <tr>
                            <td>Bleart</td>
                            <td>Itali</td>
                            <td>$2500</td>
                        </tr>
                        <tr>
                            <td>Erion</td>
                            <td>Zvicer</td>
                            <td>$1200</td>
                        </tr>
                        <tr>
                            <td>Olti</td>
                            <td>France</td>
                            <td>$3000</td>
                        </tr>
                        <tr>
                            <td>Edi</td>
                            <td>Portugali</td>
                            <td>$5000</td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New users</h2>
                        <a href="../dashboardComponents/usersDashboard.php" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                        </tr>
                        <tr>
                            <td><img src="../foto/edi.jpg" alt=""></td>
                            <td>Edi updated</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../foto/olti.jpg" alt=""></td>
                            <td>Olti updated</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../foto/enis.jpg" alt=""></td>
                            <td>Enis updated	</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../foto/olti.jpg" alt=""></td>
                            <td>Olti updated2	</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>