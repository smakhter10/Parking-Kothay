<?php
    require("connection.php")
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Kothay?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="navbar">
        <nav>
            <h2 class="logo">Parking<span>Kothay?</span></h2>     
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="find-parking.php">Find Parking</a></li>
                <li><a href="place_parking.php">List Your Parking</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Log In</a></li>
            </ul>      
        </nav>
    </div>
    <div class="main">
        <div class="login">
            <div class="row">
                <div class="admin">
                     <h1 class="sub-title">Admin LogIN</h1>
                    <form method="POST">
                         <input type="text" name="AdminName" placeholder="Admin Name">
                         <input type="password" name="AdminPass" placeholder="Password">
                            <button type="submit" name="SignIn" class="btn">Log In</button>
                    </form>
                </div>
                <div class="user">
                     <h1 class="sub-title">User LogIN</h1>
                     <form>
                         <input type="text" placeholder="User Name">
                         <input type="password" name="" id="" placeholder="User Password">
                          <button type="submit" class="btn">Log In</button>
                          <h3>OR</h3>
                          <button type="submit" class="btn"><a href="registration.php">Register</a></button>
                      </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['SignIn'])){
            $query="SELECT * FROM `admin` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Pass`='$_POST[AdminPass]' ";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) ==1 ){
                session_start();
                $_SESSION['AdminLoginId']=$_POST['AdminName'];
                header("location: admin_pannel.php");
            }

            else {
                echo "<script> alert ('Incorrect Username or Password'); </script>";
            }
        }
    ?>

   
</body>
</html>