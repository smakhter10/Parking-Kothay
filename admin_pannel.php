<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId']))
    {
        header("location: login.php");
    }

    $conn=mysqli_connect("localhost", "root" , "", "contact");
    $connection = mysqli_connect("localhost", "root", "", "admin_login");


    if($conn) {
    }
    else{
        echo "Unsuccessful";
    }

    $query="SELECT * FROM contact";
    $connect = mysqli_query($conn , $query);
    $num=mysqli_num_rows($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div id="navbar">
        <nav>
            <h2 class="logo">Parking<span>Kothay?</span></h2>     
            <ul class="menu">
                <li><a href="admin_pannel.php">Dashboard</a></li>
                <li><a href="parking-owner.php">Parking Owners</a></li>
                <li><a href="">Parking User</a></li>
                <li><a href="">Parking Places</a></li>
                <li><form method="POST"><button name="LogOut">Log Out</button></form></li>
            </ul>
        </nav>
    </div>

    <div class="main">
        <div class="welcome">
            <h1>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId'] ?></h1>
        </div>

        <div class="dashboard">
            <div class="container2">
                <h1 class="sub-title">Dashboard</h1>
                <div class="services-list">
                    <div>
                        <img src="img/parking.png" alt="Request Parking">
                        <h2>Total Parking</h2>
                        
                            <?php
                                $query2 = "SELECT id FROM parking_list ORDER BY id";
                                $query2_run = mysqli_query($connection,$query2 );

                                $row = mysqli_num_rows($query2_run);

                                echo '<h1>'.$row.'</h1>';
                            ?>

                        <a href="#">Learn More</a>
                     </div>
        
                    <div>
                        <img src="img/parking-slot.png" alt="Monthly Parking">
                        <h2>Total Parking Slots</h2>
                        
                        <?php
                            $query3 = "SELECT SUM(cost) FROM parking_list ";
                            $query3_run = mysqli_query($connection,$query3 );

                            $row2 = mysqli_num_rows($query3_run);

                            echo '<h1>'.$row2.'</h1>';
                        ?>

                        <a href="#">Learn More</a>
                    </div>
        
                     <div>
                        <img src="img/user.png" alt="Payment">
                        <h2>Users</h2>
                        <h1>2</h1>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>Message</th>
                </tr>

                <?php
                    if ($num>0) {
                        while($data=mysqli_fetch_assoc($connect)){
                            echo "
                                <tr>
                                <td>".$data['Name']."</td>
                                <td>".$data['email']."</td>
                                <td>".$data['Message']."</td>
                                </tr>
                            ";
                        }
                    }
                ?>
            </table>
    </div>
        
    </div>

    
    <?php
        if(isset($_POST['LogOut'])){
            session_destroy();
            header("location: login.php");
        }
    ?>
</body>
</html>