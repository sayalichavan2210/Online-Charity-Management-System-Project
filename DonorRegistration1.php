<html>
	<head>
		<title>Registration Form</title>
        <style>
		*{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:sans-serif;
        }
        body{
            display:flex;
            align-items:center;
            justify-content:center;
            height:100vh;
            background:linear-gradient(120deg,#2980b9,#8e44ad);
        }
        .container{
            max-width:650px;
            padding:28px;
            margin:0 28px;
            background:white;
            box-shadow:0 25px 25px #333;
            border-radius:30px;
        }
        h2{
            text-align:center;
            font-size:26px;
            font-weight:600;
            color:#F85741;
            padding-bottom:8px;
            border-bottom:1px solid silver;
        }
        .content{
            display:flex;
            flex-wrap:wrap;
            justify-content:space-between;
            padding:20px 0;
        }
        .input{
            display:flex;
            flex-wrap:wrap;
            width:50%;
            padding-bottom:15px;
        }
        .input:nth-child(2n){
            justify-content:end;
        }
        .input label,.gender{
            width:95%;
            color:#2f4f4f;
            font-weight:bold;
            margin:5px 0;
        }
        .gender{
            font-size:16px;
        }
        .input input{
            height:40px;
            width:95%;
            padding: 10px;
            border-radius:5px;
            border:1px solid #ccc;
            outline:none;
        }
        .input input:is(:focus,:valid){
            box-shadow:0 3px 6px #333;
        }
        .category{
            color:grey;
        }
        .category label{
            padding:0 20px 0 5px;
            font-size:14px;
        }
        .category label,.category input{
            cursor:pointer;
        }
        .button{
            margin:15px 0;
        }
        .button button{
            width:100%;
            margin-top:10px;
            padding:10px;
            display:block;
            font-size:22px;
         color: white;
            text-decoration: none;
            
            border:none;
            cursor:pointer;
            border-radius:30px;
            background-image:linear-gradient(to right, #f90e25, #e71886);
        }
        .button button:hover{
            box-shadow:2px 2px 5px #555;
            border-color:#2691d9;
            background-image:linear-gradient(to right, #f90e9f, #e71818);
            transition:.5s;
        }
        .date{
            color:black;
            font-size: 16px;
           
            text-decoration: none;
            color:#2f4f4f;
            font-weight:bold;
            margin-right: 150px;
        }
        
    </style>  
	</head>
<body>
	<div class="container">
		<form action="./DonorRegistration1.php" method="post">
			<h2>Donor Registration</h2>
			<div class="content">
				<div class="input">
                <label>Full Name</label>
					<input type="text"placeholder="Enter Full Name" name="name" required>
			
				</div>
				
				<div class="input">
					<label>Email Id</label>
					<input type="email"placeholder="Email Id" name="email" required>
				</div>
				<div class="input">
					<label>Phone Number</label>
					<input type="text"placeholder=" Phone Number" name="number"maxlength="10" required>
				</div>
				<div class="input">
					<label>Address</label>
					<input type="text" placeholder="Address" name="address" required>
				</div>
				<div class="input">
					<label>Password</label>
					<input type="password"placeholder="Password" name="password" required>
				</div>
				
                <div class="date">
                    <label for="">Registration Date</label>
                    <br>
                    <input style="margin-top: 5px; width :120px; height:30px; " type="date" name="date" id="">
                </div>
				<span class="gender">Gender</span>
				<div class="category">
					<input type="radio"name="gender"id="male">
					<label>Male</label>
					<input type="radio"name="gender"id="Female">
					<label>Female</label>
					<input type="radio"name="gender"id="Other">
					<label>Other</label>		
				</div>
				</div>
				<div class="button">
					<button type="submit" name="submit">Register</a></button>
				</div>
			</div>
		</form>	
	</div>
</body>
</html>
<?php
require_once "Connection.php";
error_reporting(0);
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("PHPMailer/PHPMailer.php");
require("PHPMailer/Exception.php");
require("PHPMailer/SMTP.php");

if(isset($_POST['submit'])){
    // Validate input data
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phoneno = preg_match('/^\d{10}$/', $_POST['number']) ? $_POST['number'] : false;
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);
    $date = $_POST['date'];

    if (!$email) {
        echo '<script>alert("Invalid email format")</script>';
        exit;
    }

    if (!$phoneno) {
        echo '<script>alert("Invalid phone number format. Please enter a 10-digit phone number")</script>';
        exit;
    }
    // Prepare and execute SQL query
    $sql = "INSERT INTO `doner_registratration1`(`sr_no`,`user_name`, `email`, `phoneno`, `address`, `Password`, `date`) 
            VALUES (NULL,'$name','$email','$phoneno','$address','$password','$date')";

if($connection->query($sql) === TRUE) {
    // Send email
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                 //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sayalic106@gmail.com';                     //SMTP username
        $mail->Password   = 'jnxyswhpbruyjroe';                              //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;  

        $mail->setFrom('sayalic106@gmail.com', 'sayali chavan');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Thank you for registering';
        $mail->Body = "Dear $name,<br><br>Thank you for registering.<br><br>Best regards,<br>The Humanity Associations";

        $mail->send();
        echo '<script>alert("Registration successful. Email sent."); window.location.href = "Payment1.php";</script>';
    } catch (Exception $e) {
        echo '<script>alert("Registration successful. Email could not be sent.")window.location.href = "Payment1.php";</script>';
    }
} else {
    echo '<script>alert("Error: ' . $connection->error . '")</script>';
}
}
?>