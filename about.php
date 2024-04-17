<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:rgba(128, 128, 128, 0.407);
        }
        header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 20px 100px;
      background-color: black;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
   
    header .Head {
      font-size: 30px;
      font-weight: 700;
      text-decoration: none;
      color: #fff;

    }
    nav{
        margin-right: 150px;
       justify-content: space-between;
    }
    header nav ul {
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 30PX;
    }
    header nav ul li a {
      color: #fff;
      text-decoration: none;
    }
    a:hover{
      color: orangered;
    }
    a:active{
      color: aqua;
    }
    li .login{
      background-color: green;
      width: 80px;
      padding: 10px;
      color: #fff;
      border-radius: 6px;
    }
    div{
      font: bold ;
      color: blueviolet;
      text-align: center;
    }
        .box{
            height: 250px;
            width: 300px;
            border: 3px solid purple;
            margin-left: 150px;
            border-radius: 10px;
            margin-top: 20px;
            background-color: azure;
            box-shadow: 10px 10px 10px 10px;
        }
        .box :hover{
            box-shadow: 10px 10px 10px 10px;
        }
        h3{
            font-size: 20px;
            margin-left: 30px;
            margin-top: 20px;
        }
        div{
            margin-left: 20px;
            margin-right: 20px;
            font-size: 16px;
           color: black;
            font-display: flex;
            font-style: normal;
            font-family: 'Times New Roman', Times, serif;
        }
        .About{
            margin-top: 120px;
            font-size: 30PX;
            margin-right: 1000px;
            color:purple;
        }
       
       .history{
        margin-top: 50px;
        font-size: 30px;
        text-align: left;
        margin-bottom: 30px;
        font-family:'Times New Roman', Times, serif;
        font-weight: bolder;
       }
       .achievements{
            font-size: 30px;
            font-family:'Times New Roman', Times, serif;
        font-weight: bolder;
       }
       .info{
        font-size: 16px;
        text-align: left;
       }
      .info ul{
        margin-top: 20px;
      }
      .info ul li{
        margin-bottom: 20px;
      }
    </style>
</head>
<body>
    <header>
        <a class="Head" >ONLINE CHARITY MANAGEMENT SYSTEM</a>
        <nav>
            <ul>
            <li><a href="Home1.php">Home</a></li>
          
          <li><a href="Charity.php">Charity</a></li>
         <li><a href="./ContactUs.php">Contact Us</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="Adminn.php">Admin</a></li>
          <li><span class="login"><a href="./Login.php">LOGIN</a> </span></li>
            </ul>
        </nav>
      </div> 
    </header>
    <div class="About">
    <h2 ><U>ABOUT US:-</U></h2>
    </div>
    <table>
        <tr>
            <td>
   <DIV class="box">
   <h3> Importance And Purpose </h3>
   <div>
     These organisations offer a lifeline to those in need, providing shelter, food, medical care,
      counselling, education, and empowerment. Without their efforts, many vulnerable individuals
       would be left without essential support systems.
    </div>
    </DIV>
</td>
<td>
    <DIV class="box">
       <h3>mission and Vission</h3>
       <div>
       he mission of charity organizations is to create a better world by addressing social issues and providing
        support to those in need. A clear and concise mission statement is essential to guide the organization's 
        strategy and decision-making processes.
    </div>
    </DIV>
</td>
<td>
    <DIV class="box">
        <h3>goal of Charity organization</h3>
        <div>
        charity organizations offer a wide range of services to help individuals and communities in need. By providing 
        education, resources, and health services, these organizations aim to improve the lives of those who may be 
        struggling and ensure that everyone has access to the support they need to thrive.
    </div>
        </DIV>
    </td>
    </tr>
    </table>

<table>
    <tr>
        <td>
            <div class="history">
                History of Impact Investing in the U.S :-
            </div>
        <img src="./Images/dotdash-history-impact-investing-Final-5ce8444275794c3c99868ddbc11b1011.webp" alt="">
    </td>
        <td>
            <div class="achievements">
        key milestones and achievements.
    </div>
    <div class="info">
        <ul>
            <li>
        Socially responsible investing’s origins in the United States began in the 18th century with Methodism, a denomination 
        of Protestant Christianity that eschewed the slave trade, smuggling, and conspicuous consumption, and resisted investments
         in companies manufacturing liquor or tobacco products or promoting gambling.
        </li>
        <li>
        Socially responsible investing ramped up in the 1960s, when Vietnam War protesters demanded that university endowment funds
         no longer invest in defense contractors.
        </li>
        <li>
        The combined efforts of protests and responsible investing during the Vietnam War and the apartheid regime in South Africa 
        led to institutional and legislative change.
    </li>
    <li>
        Over time, research has backed up this strategy: Companies that care about the environment, promote equality among employees,
         and enforce proper financial guidelines tend to accrue added benefits to investors.
        </li>
        </ul>
    </div>
        </td>
        </tr>
        </table>
</body>
</html>