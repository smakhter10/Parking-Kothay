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
        <div id="contact">
            <div class="container2">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-title">Contact Us</h1>
                        <p>contact@parkingkothay.com</p>
                        <p>+880 123456789</p>
                    </div>
                    <div class="contact-right">
                        <form action="connect.php" method="post">
                            <input type="text" name="Name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                            <button type="submit" name="submit" class="btn">Submit</button>
                        </form>
                     
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>