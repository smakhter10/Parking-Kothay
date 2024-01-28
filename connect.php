<?php
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $message = $_POST['Message'];

    $conn = mysqli_connect("localhost", "root", "", "contact") or die ("connection failer");

    $sql = "INSERT INTO contact(Name, email, Message) VALUES ('{$Name}', '{$email}' , '{$message}')";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    header("location: contact.php");
    
    mysqli_close($conn);
?>