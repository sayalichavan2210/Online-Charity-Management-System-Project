<?php

include "Sign_in.php";

// if (isset($_GET['signinerror'])) {
//     $error = $_GET['signinerror'];
//     if ($error == "user_not_found") {
//         echo "<p>User not found. Please check your username and try again.</p>";
//     } elseif ($error == "incorrect_password") {
//         echo "<p>Incorrect password. Please try again.</p>";
//     } else {
//         echo "<p>An unknown error occurred. Please try again later.</p>";
//     }
// }

// if (isset($_POST['sign_in'])) {
//     $username = $_POST['Username'];
//     $password = $_POST['Password'];

//     $servername = "localhost";
//     $dbusername = "root";
//     $dbpassword = "root";
//     $dbname = "charity";

//     // Create connection
//     $mysql = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//     // Check connection
//     if ($mysql->connect_error) {
//         die("Connection failed: " . $mysql->connect_error);
//     }

//     $query = "SELECT * FROM sign_up WHERE username='$username' AND password='$password'";
//     $result = mysqli_query($mysql, $query);

//     if (!$result) {
//         die("Query failed: " . mysqli_error($mysql));
//     }

//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $hashedPasswordFromDatabase = $row['password'];
//         if (password_verify($password, $hashedPasswordFromDatabase)) {
//             // Authentication successful
//             session_start();
//             $_SESSION['username'] = $username;
//             header("location:Home1.php");
//             exit();
//         } else {
//             // Incorrect password
//             header("location:login.php?signinerror=incorrect_password");
//             exit();
//         }
//     } else {
//         // User not found
//         header("location:login.php?signinerror=user_not_found");
//         exit();
//     }

//     $mysql->close();
// }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body {

            margin-top: 150px;
            margin-left: 600px;
            border-radius: 20px;
            font-family: Bahnschrift SemiCondensed;
            text-align: center;
            background-color: #fff;
            color: #485563;
            justify-content: center;
            background-image: url(./Images/login.jpg.jpg);
            background-size: cover;
        }

        h2 {
            margin-left: 10px;
            font-size: 40px;
        }

        td {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;

        }

        input {
            width: 80%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            border: 2px solid black;
        }

        div {
            margin-bottom: 30px;

        }

        .login {
            background-color: #4caf50;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: lighter;
            margin-top: 20px;
        }

        button:hover {
            background-color: rgb(255, 0, 255);
        }

        label {
            font-size: 20px;
            margin-right: 150px;
        }
      
    </style>
</head>

<body>

    <form action="./Sign_in.php" method="post">
        <h2>Login Page</h2>
        <?php
            if(isset($_GET['signinerror'])){
            $signinerror=$_GET['signinerror'];
            }
            if(!empty($signinerror)){
            echo '<script>alert("Invaild Login credentials...please Try 
            Again")</script>';
            }
            ?>

        <div class="username">
            <label>Username</label>
            <input type="text" name="Username" values="<?php if(!empty($signinerror)){echo $signinerror;}?>" required>
        </div>
        <label>Password</label>

        <input type="password" name="Password" required>

        <br>
        <br>
        <a style="font-size: 20px; font-weight: bold;">Forget Password?</a>

        <div class="Login" >
            <input type="submit" name="signin" value="Login" style="background-color: #4caf50; ">

        </div>
        <div class="Create an account">
            <a href="./SignUp.php" style="font-size: 20px;">Create an Account</a>
        </div>
        <?php if (isset($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

    </form>
</body>

</html>