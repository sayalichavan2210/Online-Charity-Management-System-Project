<?php

require_once "Connection.php";

if(isset($_POST['submit'])){
    $username = $_POST['UserName'];
    $address = $_POST['Address'];
    $mobileno = $_POST['MobileNo'];
   
    $password = $_POST['Password'];

    $sql = "INSERT INTO `sign_up` (`username`, `password`, `Mobile_No`,`Address`) VALUES ('$username', '$password', '$mobileno','$address')";

    if($connection->query($sql) === TRUE) {
        echo '<script>alert("Sign Up Successfully")</script>';
        header('location:login.php');
    } 
}



?>
