<?php
$servername = "localhost:3307";
$username = "username";
$password = "";
$dbname = "charity";


$connection= new mysqli($servername,$username,$password,$dbname);
if($connection->connect_error){
	die("connection failed" .$connection->connect_error);
}else{
	echo "";
}

?>