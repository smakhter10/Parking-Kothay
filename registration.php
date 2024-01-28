
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Kothay?</title>
    <link rel="stylesheet" href="reg-style.css">
</head>
<body>
    <div id="navbar">
        <nav>
            <h2 class="logo">Parking<span>Kothay?</span></h2>     
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="find-parking.html">Find Parking</a></li>
                <li><a href="place_parking.html">List Your Parking</a></li>
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
                        <h1 class="sub-title">Registration Form</h1>
                        <p>contact@parkingkothay.com</p>
                        <p>+880 123456789</p>
                    </div>
                
                     
                      <div class="contact-right">
                        <form action="reg-connect.php" method="post">
                            <h1 class="sub-title">Personal Information</h1>
                            <input type="text" name="firstName" placeholder="First Name" required>
                            <input type="text" name="lastName" placeholder="Last Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                            <input type="number" name="number" placeholder="Phone Number" required>

                            <h1 class="sub-title">Vehicle Information</h1>
                            <input type="number" name="vehicleNumber" placeholder="Number Plate" required>
                            <textarea name="text" rows="1" placeholder="Vehicale Type"></textarea>
                            <button type="submit" name="submit" class="btn" onclick="openPopup">Register</button>
                        </form>
                       
                        <div class="popup" id="popup">
                            <h2>Confirmation Information</h2>
                            <p>"Pnumber"</p>
                            <p>"Vnumber"</p>
                            <button type="button" onclick="closePopup">OK</button>
                        </div>

                    </div>

                    <script>
                        let popup = document.getElementById("popup");
                        function openPopup(){
                            popup.classList.add("open-popup");
                        }
                        function closePopup(){
                            popup.classList.remove("open-popup");
                        }
                    </script>
            </div>
        </div>
    </div>
   
</body>
</html>