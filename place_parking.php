<?php
if(isset($_POST['btn'])){
    $name = $_POST['Name'] ;
    $address = $_POST['Address'] ;
    $phone = $_POST['phone'] ;
    $email = $_POST['email'] ;
    $space = $_POST['Space'] ;
    $cost = $_POST['Cost'] ;

    $conn = mysqli_connect("localhost", "root", "", "admin_login");
    $sql = "INSERT INTO parking_list(name, address, phone, email, spot, cost) values ('$name', '$address', '$phone', '$email', '$space', '$cost') ";

    mysqli_query($conn , $sql);
}

?>


<!DOCTYPE html>
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
        <div id="home">
            <div class="cover"><img src="img/cover.jpg" ></div>
            <div class="content">
                <h1>LIST YOUR <br> <span>PARKING</span> <br> TODAY</h1>
                <h4>Transformaing Parking Experiences Through Digitization</h4>
            </div>
        </div>

        <div class="list-form">
            <div class="sub-title">Fill up the Form</div>
            <form action="" method="POST">
                <input type="text" name="Name" placeholder="Your Full Name" required>
                <input type="text" name="Address" placeholder="Your Full Address" required>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}[0-9]{8}" placeholder="Your Phone Number">
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="number" name="Space" placeholder="Total Parking Spot" required>
                <input type="number" name="Cost" placeholder="Monthly Cost" required>
                <button type="submit" name="btn" class="btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>