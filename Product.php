<?php
$servername = "localhost:3307";
$username = "username";
$password = "";
$dbname = "CSHOP";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo " ";
}

$sql = "SELECT * FROM `producttable`";
$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        h1{
            text-align: center;
            margin-top: 50px;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <H1>REPORT</H1>
    <h2>PRODUCT TABLE</h2>
    <table>
        <tr>
        
            <th>productID</th>
            <th>CategoryName</th>
            <th>SubCategoryName</th>
            <th>ProductName</th>
            <th>Purchaseprice</th>
            <th>SalePrice</th>
            <th>GSTApplied</th>
            <th>Date</th>
            <th>StockQuantity</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
          
            echo "<td>" . $row['productID'] . "</td>";
            echo "<td>" . $row['CategoryName'] . "</td>";
            echo "<td>" . $row['SubCatageryName'] . "</td>";
            echo "<td>" . $row['ProductName'] . "</td>";
            echo "<td>" . $row['Purchaseprice'] . "</td>";
            echo "<td>" . $row['SalePrice'] . "</td>";
            echo "<td>" . $row['GSTApplied'] . "</td>";
            echo "<td>" . $row['Date'] . "</td>";
            echo "<td>" . $row['StockQuantity'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

