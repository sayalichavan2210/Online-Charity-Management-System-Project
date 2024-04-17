<?php
require_once 'Connection.php';

function calculateTotalDonations($connection) {
    $query = "SELECT SUM(donation_amount) AS total_amount FROM payment4";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total_amount'];
}

$sql = ""; // Initialize $sql with an empty string

// Check if the "Show All Records" button is clicked
if (isset($_GET['show_all'])) {
    $sql = "SELECT t1.sr_no AS sr_no, t1.name, t1.email, t1.phoneno, t1.address, t1.date,
    t2.payment_method, t2.donation_amount
    FROM doner_registratration4 t1
    INNER JOIN payment4 t2 ON t1.phoneno = t2.phoneno";
} else {
    // Check if a search query is present
    if (isset($_GET['name'])) {
        $search_name = mysqli_real_escape_string($connection, $_GET['name']);
        $sql = "SELECT t1.sr_no AS sr_no, t1.name, t1.email, t1.phoneno, t1.address, t1.date,
        t2.payment_method, t2.donation_amount
        FROM doner_registratration4 t1
        INNER JOIN payment4 t2 ON t1.phoneno = t2.phoneno
        WHERE t1.name LIKE '%$search_name%'";
    }
}

if (!empty($sql)) {
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        die("Error: " . mysqli_error($connection));
    }

    $records = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $records[] = $row;
    }

    // Calculate total donation amount
    $totalDonations = calculateTotalDonations($connection);

    mysqli_close($connection);
} else {
    $records = array();
    $totalDonations = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
}

nav {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

button {
    padding: 10px 20px;
    margin: 0 10px;
    border: none;
    background-color: #007bff;
    color: #e71818;
    border:1px solid black;
    cursor:pointer;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    text-decoration:none;
}

button:hover {
    background-color: orangered;
}

table {
    margin: 20px auto;
    border-collapse: collapse;
    width: 80%;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #333;
    color: white;
}

p {
    text-align: center;
    font-size: 25px;
    margin-top: 20px;
   
}

h1 {
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    margin-top: 20px;
    margin-right: 200px;
}

div button {
    float: left; /* Align button to the left */
    padding: 10px 20px;
    margin-right: 20px; /* Add some space between the button and the title */
    border: none;
    background-color:#f0f0f0;
    cursor: pointer;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
}

.back-button:hover {
    background-color: orangered;
}
.search {
    text-align: center;
    margin-top: 20px;
}

.search label {
    margin-right: 10px;
}

.search input[type="text"],
.search button {
    padding: 5px 10px;
    font-size: 16px;
}

.search button {
    background-color: #007bff;
    color: white;
    border: 1px solid #007bff;
    cursor: pointer;
}

.search button:hover {
    background-color: orangered;
}
.show-all {
    text-align: center;
    margin-top: 20px;
}

.show-all button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #007bff;
    color: white;
    border: 1px solid #007bff;
    cursor: pointer;
}

.show-all button:hover {
    background-color: orangered;
}
.report-button {
    float: right;
    padding: 10px 20px;
    margin-right: 20px;
    border: none;
    background-color:#f0f0f0;
    
    color: white;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    text-align: center;
}

.report-button:hover {
    background-color: orangered;
}

</style>
</head>
<body>
<header>
    <div>
        <button class="back-button"><a href="Home1.php" style="color:black; text-decoration: none;">Back</a></button>
        <button class="report-button"><a href="Report.php" style="color:black; text-decoration: none;"> Report</a> </button>
    </div>
    <h1>ADMIN PAGE</h1>
</header>
<nav>
    <button><a href="./Adminpage.php" style="color: black; text-decoration:none;">Food Foundation</a></button>
    <button><a href="./Admin2.php"  style="color: black;text-decoration:none;">Education Providers</a></button>
    <button><a href="./admin3.php"  style="color: black;text-decoration:none;">Health Promotion Charity</a></button>
    <button><a href="./admin4.php"  style="color: black;text-decoration:none;">Family and Childcare Trust</a></button>
    <button><a href="./admin5.php"  style="color: black;text-decoration:none;">Animal welfare groups</a></button>
    <button><a href="./admin6.php"  style="color: black;text-decoration:none;">Arts associations</a></button>
</nav>
<div class="search">
    <form action="./Admin5.php" method="GET">
        <label for="search">Search by Name:</label>
        <input type="text" id="search" name="name">
        <button type="submit">Search</button>
    </form>
</div>
<div class="show-all">
    <form action="./Admin5.php" method="GET">
        <button type="submit" name="show_all">Show All Records</button>
    </form>
</div>

<h1>ANIMAL WELFARE GROUPS</h1>
<?php if (!empty($records)): ?>
<table border="1">
    <tr>
      
        <th>Full Name</th>
        <th>E-Mail</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Registration Date</th>
        <th>Payment Method</th>
        <th>Donation Amount</th>
    </tr>
    <?php foreach ($records as $record): ?>
    <tr>
       
        <td><?php echo $record['name']; ?></td>
        <td><?php echo $record['email']; ?></td>
        <td><?php echo $record['phoneno']; ?></td>
        <td><?php echo $record['address']; ?></td>
        <td><?php echo $record['date']; ?></td>
        <td><?php echo $record['payment_method']; ?></td>
        <td><?php echo $record['donation_amount']; ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="6" style="text-align: center; font-size: larger; font-family: 'Times New Roman', Times, serif; font-weight: bolder">Total Donation Amount:</td>
        <td><?php echo $totalDonations; ?></td>
    </tr>
</table>
<?php else: ?>

<?php endif; ?>

</body>
</html>