<?php
require_once "Connection.php";

if (isset($_POST['sent'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';

    // Validate inputs
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email format!");</script>';
        exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO `donorregistration` (`email`, `username`) VALUES (?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $email, $username);

    if ($stmt->execute()) {
        echo '<script>alert("Thank you for your donation!"); window.location.href = "Home1.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $stmt->error . '");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Thank You for Your Donation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            margin-top: 30px;
            margin-left: 500px;
            background-image: url(./Images/360_F_310162798_6hWbaSFgDtWp4AhhaKPlTgAZUDL1c4UY.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }

        .container {
            max-width: 600px;

            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            border-radius: 20px;
            box-shadow: 10px 20px 20px 10px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin-bottom: 10px;
            font-family:'Times New Roman', Times, serif;
            font-size: 18px;
        }

        .sent {
            margin-top: 20px;
            margin-left: 200px;
            box-shadow: 5px 5px 5px 5px;
            width: 200px;
            margin-bottom: 20px;
            background-color: whitesmoke;
            border-radius: 5px;
            text-align: center;

        }
        input{
            margin-top: 20px;
            width: 300px;
            border-radius: 5px;
           border-color: #333;
           height: 25px;
        }
        button{
            box-shadow: 5px 5px 5px 5px;
            background-color: whitesmoke;
            width: 200px;
            border-radius: 5px;
            font-family:'Times New Roman', Times, serif;
            font-weight: bolder;
        }
    </style>
</head>

<body>


<div class='container'>
<form method="post" action="./letter3.php">
Enter Your Email-Id :
<input type="text" name="email"><br>
Enter Your Name : &nbsp;&nbsp;
<input type="text" name="Donor">
    <h1>Thank You for Your Donation!</h1>
    <p>Dear <?php echo isset($username) ? htmlspecialchars($username) : ''; ?>,</p>
    <p>On behalf of our organization, we want to extend our deepest gratitude for your generous donation.
    Your support helps us continue our mission to provide support and resources to those in need through 
    charitable donations. We strive to make a positive impact on individuals and communities by fostering 
    a culture of giving and generosity. Through our efforts, we aim to improve lives, inspire hope, and create
    a more compassionate world.</p>
    <p><b  style="font-size: 20px;">Thank you once again for your kindness and generosity.</b></p>
    <p  style="font-size: 18px;">Sincerely,</p>
    <p>The Humanity Association</p>
    <!-- Add any additional form fields here if needed -->
    <div class="sent">
        <button type="submit" name="sent" style="font-size: 25px;">Send</button>
    </div>
</form>
</div>

</body>

</html>
