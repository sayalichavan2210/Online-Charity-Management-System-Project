


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
 <style>
	body{
	margin:0;
	padding:0;
	font-family:montserrat;
	background-image: url(a.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	height:100vh;
	float:hidden;
}
.center{
	position:absolute;
	top:50%;
	left:50%;
	transform: translate(-50%, -50%);
	width:400px;
	background:transparent;
	border: 2px solid black;
	box-shadow:0 25px 25px #333;
	border-radius:30px;
}
.center h1{
	text-align:center;
	padding:0 0 20px 0;
	border-bottom:1px solid red;
}
.center form{
	padding:0 40px;
	box-sizing:border-box;
	
}
form .text{
	position:relative;
	border-bottom:2px solid #090909;
	margin:30px 0;
}
.text input{
	width:100%;
	padding:0 5px;
	height:40px;
	font-size:16px;
	border:none;
	background:none;
	outline:none;
}
.text label{
	position:absolute;
	top:50%;
	left:5px;
	color:#0b0404;
	transform:translateY(-50%);
	font-size:18px;
	pointer-events:none;
}
.text span::before{
	content:'';
	position:absolute;
	top:40px;
	left:0;
	width:0%;
	height:2px;
	background:#2691d9;
	transition:.5px;
}
.text input:focus ~ label,
.text input:valid ~ label{
	top:-5px;
	color:#2691d9;
}
.text input:focus ~ span::before,
.text input:valid ~ span::before{
	width:100%;
}
.pass{
	margin: -5px 0 20px 5px;
	color:red;
	cursor:pointer;
}
.pass:hover{
	text-decoration:underline;
}
input[type="submit"]{
	width:100%;
	height:50px;
	border:1px solid;
	background:linear-gradient(to right, #0d6d8a, #ae2ab3);
	border-radius:25px;
	font-size:20px;
	color:#e9f4fb;
	cursor:pointer;
	outline:none;
}
input[type="submit"]:hover{
	box-shadow:2px 2px 5px #555;
	border-color:#2691d9;
	transition:.5s;
}
.sign{
	margin:30px 0;
	text-align:center;
	font-size:16px;
	color:#666666;
}
.sign a{
	color:#2691d9;
	text-decoration:none;
}
.sign a:hover{
	text-decoration:underline;
	
}
.h{
	text-align:center;
	font-weight:900;
	margin-top:40px;
	color:rgb(9, 67, 82);
}
.h span{
	color:#F85741;
}

 </style>
</head>
<body>
    <h1 class="h">DONOR LOGIN</h1>
    <div class="center">
        <h1>LOGIN</h1>
        <form action="Adminn.php" method="post"  onsubmit="return validateForm()" style="height: 300px;">
            <div class="text">
                <input type="text" name="username" required>
                <span></span>
                <label for="username">Username</label>
            </div>  
            <div class="text">
                <input type="password" name="password" required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <br>
        </form>
    </div>
	<script>
	function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === 'admin' && password === 'password') {
        alert('Login successful');
        return true;
    } else {
        document.getElementById('message').innerHTML = 'Invalid username or password';
        return false;
    }
}
</script>
</body>
</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform server-side validation
    if ($username === 'admin' && $password === 'password') {
        // Authentication successful
        $_SESSION['username'] = $username;
        header("Location: Adminpage.php");
        exit();
    } else {
        // Authentication failed
        echo '<script>alert("Invalid username or password"); window.location.href = "admin_login.html";</script>';
        exit();
    }
}
?>

