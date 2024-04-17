<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url('./Images/abstract-textured-backgound_1258-30484.avif');
        }
        form{
            margin-top: 10px;
            margin-left: 300px;
            border: 1px solid beige;
            background-color: white;
           color: black;
            height: 600px;
            width: 900px;
            border-radius: 20px;
            box-sizing: border-box;
            border-color: rgba(58, 204, 10, 0.192);
            box-shadow: 50px;

        }
    .container{
        margin-top: 50px;
        margin-left: 30px;
        height: 170px;
        width: 250px;
        border: 1px solid black;
        background-color: aliceblue;
        color: black;
    }
    img{
        height: 80px;
        width: 150px;
       margin-left: 30px;
       margin-top: 10px;
       margin-bottom: 20px;
    }
    .number{
        text-align: left;
        margin-right: 30px;
    }
    .name{
        text-align: end;
       
    }
    .card_no {
    font-size: 20px;
    margin-top: 20px;
    margin-bottom: 10px;
    margin-left: 50px;
    display: flex; /* Use flexbox */
    align-items: center; /* Vertically center elements */
}

.card_no input {
    border: 1px solid black;
    border-radius: 8px;
    flex: 1; /* Take up remaining space */
    margin-left: 10px; /* Adjust as needed */
    height: 25px;
}

   .mon_year{
    font-size: 20px;
    margin-left: 80px;
   }
   .mon_year input{
    border: 1px solid black;
        border-radius: 8px;
        height: 25px;
        width: 400px;
        margin-left: 5px;
   }
   .cvv_code{
    font-size: 20px;
  
   }
   .cvv_code input{
    border: 1px solid black;
        border-radius: 8px;
        height: 25px;
        width: 200px;
        margin-top: 10px;
   }
   .card_name{
    font-size: 20px;
  
        margin-bottom: 10px;
        margin-left: 20px;
   }
   .card_name input{
    border: 1px solid black;
        border-radius: 8px;
       margin-right: 20px;
        height: 25px;
        width: 400px;
   }
   button{
    height: 35px;
    width: 500px;
    text-align: center;
    font-size: 18px;
    background-color: rgba(255, 182, 193, 0.655);
    border-radius: 10px;
    margin-left: 200px;
    margin-top: 30px;
   }
.Donation_Amount{
    font-size: 20px;
}
.Donation_Amount input{
    border: 1px solid black;
        border-radius: 8px;
        height: 25px;
        width: 200px;
        margin-top: 10px;
}
h2{
    text-align: center;
    font-size: 50px;
    color: white;
}
::placeholder{
    text-align: center;
}
.mobile {
    margin-top: 20px;
    display: flex; /* Use flexbox */
    align-items: center; /* Vertically center elements */
   
}

.mobile label {
    margin-left: 10px;
    font-size: 20px;
    width: 150px; /* Set width for label */
    text-align: right; /* Align label to the right */
    margin-right: 20px; /* Add some margin between label and input */
}

.mobile input {
    flex: 1; /* Take up remaining space */
    border: 1px solid black;
    border-radius: 8px;
    height: 25px;

}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('paymentForm').addEventListener('submit', function(event) {
        var cardNo = document.getElementById('card_no').value;
        var monthYear = document.getElementById('monthyear').value;
        var cvvCode = document.getElementById('cvv_code').value;
        var donationAmount = document.getElementById('donation_amount').value;

        if (!validateCardNo(cardNo)) {
            alert('Invalid card number format. Please enter a valid card number.');
            event.preventDefault(); // Prevent form submission
        }

        if (!validateMonthYear(monthYear)) {
            alert('Invalid month/year format. Please use mm/yy format.');
            event.preventDefault(); // Prevent form submission
        }

        if (!validateCVVCode(cvvCode)) {
            alert('Invalid CVV code format. Please enter a valid CVV code.');
            event.preventDefault(); // Prevent form submission
        }

        if (!validateDonationAmount(donationAmount)) {
            alert('Invalid donation amount. Please enter a valid donation amount.');
            event.preventDefault(); // Prevent form submission
        }
    });

    function validateCardNo(cardNo) {
        var regex = /^[0-9]{16}$/;
        return regex.test(cardNo);
    }

    function validateMonthYear(monthYear) {
        var regex = /^(0[1-9]|1[0-2])\/[0-9]{2}$/;
        return regex.test(monthYear);
    }

    function validateCVVCode(cvvCode) {
        var regex = /^[0-9]{3}$/;
        return regex.test(cvvCode);
    }

    function validateDonationAmount(donationAmount) {
        var regex = /^[1-9]\d*$/;
        return regex.test(donationAmount);
    }
    
});
</script>

</head>
<body>
    <h2>PAY FOR DONATION</h2>
    <form action="Payment3.php" id="paymentForm" method="post">
    <table>
        <tr>
            <td>
                <div class="container">
                     <img src="./Images/visa-logo-download-png-21.png" alt="">
                    <div class="number">
                        <label for="">**** **** **** 1060</label>
                        <br>
                        <small><span >Expiry date:</span><span>10/26</span></small>
                        <div class="name">
                             <small><span >Name:</span><span>XYZ</span></small>
                      </div>
                    </div>
                 </div>
            </td>
            <td>
                <div class="container">
                    <img  src="./Images/master-card.png"alt="">
                    <div class="number">
                        <label class="fw-bold">**** **** **** 1060</label>
                        <br>
                        <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                        <div class="name">
                             <small><span class="fw-bold">Name:</span><span>xyz</span></small>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                 <div class="container">
                    <img src="./Images/credit-cards-discover-png-logo-4.png" alt="">
                    <div class="number">
                        <label class="fw-bold">**** **** **** 1060</label>
                        <br>
                        <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                        <div class="name">
                            <small><span class="fw-bold">Name:</span><span>XYZ</span></small>
                          </div>
                    </div>
                </div>
            </td>
        </tr>
        </table>
           <table>
            <tr>
                    <td>
                    <div class="mobile">
				<label for="mobile">Mobile Number :</label>
                <input type="text" id="mobile" name="phoneno" maxlength="10" required>

            </div>
             
            </td>
            </tr>
            <tr>
                <td>
             <div class="card_no">    
                <label for="" class="form__label">Card Number :</label>
               <input style="height: 25px; width: 500px;"maxlength="16" type="text" name="card_no" placeholder=" " required>    
            </div>  
        </td>
        </tr>
             <tr>                 
                <td>
                    <div class="mon_year">
                    <label for="month">Expiration Date (MM/YY):</label>
                    <input type="text" id="expiryDate" name="expiryDate" maxlength="5" placeholder="MM/YY" required>
            </div>
            </td>   
            <td>
                <div class="cvv_code">
                <label  class="form__label">cvv code :</label>    
                <input type="password" class="form-control" name="cvv_code" maxlength="4" placeholder=" " required>   
            </div>     
            </td>
            </tr>                               
            <tr>    
                <td>   
                    <div class="card_name">
                <label for="" class="form__label">name on the card :</label>              
                <label for="payment-method"></label>
  <select id="payment-method" name="payment-method">
    <option value="credit-card">Credit Card</option>
    <option value="debit-card">Debit Card</option>
    <option value="paypal">PayPal</option>
    <option value="google-pay">Google Pay</option>
  </select>
              </div> 
            
            </td> 
            <td>
            <div class=" Donation_Amount">
                <label for="" class="form__label">Donation Amount :</label>              
                <input type="text" class="form-control"name="donation_amount" maxlength="10" placeholder=" " required>
            </div>   
        </td>  
            </tr>   
                                                                           
        </table>
        <button name="submit">Pay Now</a></button>
    </form>   
</body>
</html>
<?php
require_once "Connection.php";

if(isset($_POST['submit'])){
    $paymentmethod = $_POST['payment-method'];
    $donation_amount = $_POST['donation_amount'];
    $phoneno = $_POST['phoneno'];

    $sql = "INSERT INTO `payment3`(`payment_method`, `donation_amount`, `phoneno`) VALUES
    ('$paymentmethod', '$donation_amount', '$phoneno')";

    if($connection->query($sql) === TRUE) {
        echo '<script>alert("Payment Successfully"); window.location.href = "letter3.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $connection->error .'")</script>';
    }
}
?>
