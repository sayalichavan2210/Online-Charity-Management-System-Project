<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:white;
            width: 500px;
            height: 550px;
            margin-left: 500px;
            margin-top: 70px;
            border: 1px solid black;
            border-radius: 30px;
            box-shadow: 10px 10px 10px 10px;
            background-image:url('images/page-background.png');
        background-repeat: no-repeat;
        background-size: cover;
           
        }
        .container {
            width: 455px;
            height: 520px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 px 5px rgba(0,0,0,0.1);
            box-shadow: #333;
            border: 3px solid black;
        }
        h2 {
            color: #333;
           font-size: 40px;
           font-style: initial;
           font-family: 'Times New Roman', Times, serif;
           text-align: center;
        }
        input[type="text"], textarea {
            width: 400px;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            box-shadow: 0 px 5px rgba(0,0,0,0.1);
            margin-left: 50px;
        }
        textarea {
            height: 150px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: rgba(52, 46, 46, 0.918);
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px;
            margin-left: 170px;
            border: #4CAF50;
         
           
        }
        input[type="submit"]:hover {
            background-color: #9311e9;
            color: whitesmoke;
        }
        input[type="email"]{
          width: 400px;
          height: 40px;
          border-radius: 8px;
          box-sizing: border-box;
          box-shadow: #333;
          border: none;
          border: 1px solid #ccc;
          box-shadow: 0 px 5px rgba(0,0,0,0.1);
          margin-bottom: 20px;
         
        }
        label{
          font: bolder;
          font-size: 18px;
          font-style: normal;
          font-family: 'Times New Roman', Times, serif;
         
        }
        input[type="submit"]{
	width:80%;
	height:50px;
	border:1px solid;
	background:linear-gradient(to right, #0d6d8a, #ae2ab3);
	border-radius:25px;
	font-size:20px;
	color:#e9f4fb;
	cursor:pointer;
	outline:none;
    margin-left: 40px;
}
input[type="submit"]:hover{
	box-shadow:2px 2px 5px #555;
	border-color:#2691d9;
	transition:.5s;
}
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="./ContactUs.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" name="submit" value="Submit" >
        </form>
    </div>
</body>
</html>
<?php
require_once "Connection.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
    if($connection->query($sql) === TRUE) {
        echo '<script>alert("Contact Us Successfully"); window.location.href = "Home1.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $connection->error . '")</script>';
    }
}

?>
  