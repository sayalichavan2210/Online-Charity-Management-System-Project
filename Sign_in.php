<?php
session_start();
require_once "Connection.php";
if (isset($_POST['signin'])) {
	$login = $_POST['login'];
	$username = $_POST["Username"];
	$Password = $_POST['Password'];
	$res = mysqli_query($connection, "SELECT * FROM `sign_up` WHERE username='$username' ");
	$numrows = mysqli_num_rows($res);
	if ($numrows == 1) {
		$row = mysqli_fetch_assoc($res);
		$hashedPasswordFromDatabase = $row['password'];
		$userSubmittedPassword = $_POST['Password'];
		if ($userSubmittedPassword === $hashedPasswordFromDatabase) {
			$_SESSION["username_sess"] = "1";
			$_SESSION["username"] = $row['username'];
			header("location:Home1.php");
		} else {
			header("location:login.php?signinerror=@" . $username);
		}
	} else {
		header("location:login.php?signinerror=$" . $username);
	}
}
