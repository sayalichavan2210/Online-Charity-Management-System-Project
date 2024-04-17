<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign In</title>
<style>
	body{
		text-align: center;
		margin-top: 100px;
		margin-left: 450px;	
		border-radius: 20px;
		font-family: Bahnschrift SemiCondensed;
		background-color: #fff;
		color: #485563;
		justify-content: center;
        background-image: url('./Images/360_F_310162798_6hWbaSFgDtWp4AhhaKPlTgAZUDL1c4UY.jpg');
        background-repeat: no-repeat;
        background-size: cover;
	}
	form{
		 background-color: #fff;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 30px 30px 30px 30px rgba(0, 0, 0, 0.1);
      width: 600px;
      height: 450px;
      border: 2px solid black;
	}	
    .First_Name{
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 20px;
        margin-left: 35px;
        margin-right: 50px;
    }
    .First_Name input{
      margin-left: 50px;
        width: 300px;
        height: 30px;
    border-radius: 20px;
    border: 1px solid black;
    }
	.Address{
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 20px; 
    }
    .Address input{
        width: 300px;
        margin-left: 50px;
        height: 30px;
    border-radius: 20px;
    border: 1px solid black;
    }

   .Mobile_No{
    margin-top: 20px;
        margin-bottom: 20px;
        font-size: 20px;
    }
    .Mobile_No input{
        width: 300px;
        margin-left: 40px;
        height: 30px;
    border-radius: 20px;
    border: 1px solid black;
    }
    .Gender{
        font-size: 20px;
        margin-left: 110px;
        text-align: left;
    }
    .Gender input{
       margin-left: 40px;
    }
    .Password{
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 20px;
        margin-right: 50px;
        margin-left: 50px;
    }
    .Password input{
        width: 300px;
        margin-left: 50px;
        height: 30px;
    border-radius: 20px;
    border: 1px solid black;
    }
</style>
  <script>
function validateForm() {
    var UserName = document.getElementById("UserName").value;
    var Address = document.getElementById("Address").value;
    var MobileNo = document.getElementById("MobileNo").value;
    var password = document.getElementById("password").value;
    var gender = document.querySelector('input[name="gender"]:checked');
    if (username === "" || Address === "" || MobileNo==="" ||password === "" ||gender==="") {
        alert("All fields must be filled out");
        return false;
    }
    if (!/^\d{10}$/.test('MobileNo')) {
        alert("Mobile number must be 10 digits");
        return false;
    }
    function validateMobileNo(MobileNo) {
    MobileNo = MobileNo.replace(/\D/g, '');

    if (MobileNo.length !== 10) {
        return false;
    }
    return true;
}
let MobileNo = "1234567890";
if (validateMobileNo(MobileNo)) {
    console.log("Mobile number is valid");
} else {
    console.log("Mobile number is invalid");
}
}
</script>

</script>
</head>
<body>
	<form action="./sign_up.php" method="post">
		<h1>Sign In</h1>
		<div class="First_Name">
	<label >Username</label>
		<input type="text" name="UserName" required="">
		</div>
		<div class="Address">
			<label>Address</label>
		<input type="text" name="Address" required="">
		</div>
		<div class="Mobile_No">
			<label>Mobile No</label>
		<input type="text" name="MobileNo" maxlength="10" required="">	
		</div>
		</div>
		<div class="Password">
			<label>Password</label>
		<input type="password" name="Password" required="">
		</div>
        <div class="Gender" >
        <label for="">Gender</label>
       
        
            <input type="radio" name="gender" value="male">
            Male
        
            <input type="radio" name="gender" value="female">
            Female
            <input type="radio" name="gender" id="other">
            Other
        </div>
		<button style="margin-top: 50px; font-size: 20px; background-color: rgb(47, 55, 143);color: white; border: 2px solid black;
        border-radius: 10px; width: 100px; height: 40px;" name="submit">
            Sign Up</button>
	</form>
    </body>
</html>

