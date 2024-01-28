<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $vehicleNumber = $_POST['vehicleNumber'];
  $text = $_POST['text'];
  

  $conn = new mysqli('localhost','root', '' , 'test');
  if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
  }  else{
     $stmt = $conn->prepare("insert into registration(firstName, lastName, email, number, vehicleNumber, text)
            values(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssiis", $firstName, $lastName, $email, $number, $vehicleNumber, $text);
            $stmt->execute();
            echo "registration Successfully..";
            $stmt->close();
            $conn->close();
  }

  ?>
