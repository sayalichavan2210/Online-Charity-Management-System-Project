<!DOCTYPE html>
<html >
<head>
   
    <title>Document</title>
    <style>
       
        .Couses{   
     width: 100%;
     height: 100vh;
     padding: 20px;
     margin-top: 20px;
 }
 .Couses h1 {
     font-size: 50px;
     text-align: center;   
 }
 .courses_box {
     width: 100%;
     height: 100%;
     margin-top: 50px;
     display: flex;
     align-items: center;
     justify-content: center;
     flex-wrap: wrap;
     gap: 60px; 
 }
 .Couses .box:hover{
     border: 3px solid black;
    box-shadow: 10px 10px 10px 10px;
     background-color: white;
    
    
 }
 .Couses .box {
     width: 300px;
     height: 350px;
     background-color: #ffffff;
     border: 3px solid rgba(0, 0, 0, 0.5);
     border-radius: 20px;   
     margin-top: 10px;
    
 }
 .Couses .box .img {
   margin-top: 40px;
     width: 80%;
     height: 30%;
     display: flex;
     align-items: center;
     justify-content: center;
     border-radius: 20px;
     margin-left: 20px;
 }
 .Couses .box .img img {
   margin-top: 50px;
     width: 200px;
     height: 200px;
 }
 .Couses .box .Donate_Now {
   margin-top: 40px;
     width: 100%;
     height: 50%;
     border-radius: 20px;
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;
     gap: 20px;
 }
 .Couses .box .info .h2 {
     font-size: 18px; 
     text-decoration: none;
     color: #000;
    
 }
 .courses_box .box .info a {
            font-size: 30px;
            text-decoration: none;
            color: #000;
        }
        .courses_box .box .info p {
            font-size: 15px;
            
        }
       
      
    </style>
</head>
<body style="background-image: url('./Images/winter-light-blue-gradient-background_53876-120755.avif'); background-size: cover;">
   

  
    <div class=" Couses">
        <h1>OUR COUSES</h1>
        <table>
            <tr>
                <td>
                  <div class="Couse1">
                 <div class="box" style="margin-left: 100px; ">
                <div class="img">
                    <img src="./Images/images.jpeg" alt="C">
                </div>
                <div class="Donate_Now">
                    <a href="#"><h2  style="margin-top: 100px; ">Food Foundation</h2></a> 
                    <button style="margin-bottom: 120px;"> <a href="./DonorRegistration.php">DONATE NOW</a></button>
                    
                </div>
                </td>
              <td>
                <div class="box"  style="margin-left: 150px; margin-top: 20px;">
                  <div class="img">
                      <img src="./Images/54264a84e2f96cb7a5c32efa99b4714d (1).jpg" alt="">
                  </div>
                  <div class="info">
                      <a href="#">
                        <h2 style="margin-top: 70px; margin-left: 50px;">education providers </h2></a>
                      <button style="margin-left: 100px; margin-top: 10px;"><a href="./DonorRegistration1.php">DONATE NOW</a></button>
                     
                  </div>
                 
              </div>
             </td>
                <td>
                    <div class="box" style="margin-left: 150px; margin-top: 20px;"  >
                        <div class="img">
                                <img src="./Images/download (4).png" alt="">
                        </div>
                        <div class="Hospital" style="margin-top: 50px; margin-left: 20px;">
                            <a href="#">
                                <h2 > Health Promotion Charity</h2></a>
                                <button style="font: bolder; margin-top: 20px; margin-left: 100px; " ><a href="./DonorRegistration2.php">DONATE NOW</a></button>
                        </div>
                    </div>
                </td>
    <tr>
           <td>
            <div class="box" style="margin-left: 100px;">
                <div class="img">
                        <img src="./Images/family.jpg" alt="">
                </div>
                <a href="#">
                    <h2 style="text-align: center; margin-top: 70PX;">Family and Childcare Trust</h2>
                    <button style="margin-left: 100px; margin-top: 10px;"><a href="./DonorRegistration3.php">DONATE NOW</a></button>
                </a>

            </div>
            </div>
        </div>
        </div>
           </td>
           <td>
            <div class="box" style="margin-left: 150px; margin-top: 30px;">
                <div class="img">
                        <img src="./Images/images (3).png" alt="">
                </div>
                <a href="#">
                    <h2 style="text-align: center; margin-top: 70PX;">Animal welfare groups</h2>
                    <button style="margin-left: 100px; margin-top: 10px;"><a href="./DonorRegistration4.php">DONATE NOW</a></button>
                </a>
           </td>
           <td>
            <div class="box" style="margin-left: 150px; margin-top: 30px;">
                <div class="img">
                        <img src="./Images/download.jpg" alt="">
                </div>
                <a href="#">
                    <h2 style="text-align: center; margin-top: 70PX;">Arts associations</h2>
                    <button style="margin-left: 100px; margin-top: 10px;"><a href="./DonorRegistration5.php">DONATE NOW</a></button>
                </a>
           </td>
           
        </tr>      
   
    </table>
</body>
</html>