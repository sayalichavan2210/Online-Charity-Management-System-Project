<?php
require_once "Connection.php";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Connections</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    justify-content: center;
    margin-top: 30px;
}

.container button {
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.container button:hover {
    background-color: #0056b3;
}




        .report-section {
            display: none;
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media print {
            .container {
                border: none;
            }

            /* Hide non-essential elements */
            table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 10px;
            }

            body {
                margin: 0; /* Adjust the left margin as needed */
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
            }

            th {
                background-color: #f2f2f2;
                font-size: 14px; /* Adjust the font size for table headers */
            }

            td {
                font-size: 12px; /* Adjust the font size for table data */
            }

            button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <h1>REPORT</h1>
    <div class="container">
        <button onclick="toggleReport(1)">FOOD FOUNDATION CHARITY</button>
        <button onclick="toggleReport(2)">EDUCATION PROVIDER REPORT</button>
        <button onclick="toggleReport(3)">HEALTH PROMOTION CHARITY REPORT</button>
        <button onclick="toggleReport(4)">FAMILY CHILDCARE TRUST REPORT</button>
        <button onclick="toggleReport(5)">ANIMAL WELFARE GROUP REPORT</button>
        <button onclick="toggleReport(6)">ART ASSOCIATIONS REPORT</button>
    </div>

    <div id="report1" class="report-section" style="display: none;">
        <?php
        $sql = "SELECT t1.name, t1.email, t1.phoneno, t1.address, t1.date,
                t2.payment_method, t2.donation_amount
                FROM doner_registration t1
                INNER JOIN payment t2 ON t1.phoneno = t2.phoneno";

        $result = $connection->query($sql);

        $records = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
        }

        $totalDonations = array_sum(array_column($records, 'donation_amount'));
        ?>

        <?php if (!empty($records)): ?>
            <h2>FOOD FOUNDATION REPORT</h2>
            <p>Total Donations: <?php echo $totalDonations; ?></p>
            <p>Number of Donors: <?php echo count($records); ?></p>
            <p>Average Donation: <?php echo $totalDonations / count($records); ?></p>
            <div class="records">
                <button onclick="printReport()">Print Report</button>
            </div>
            <br>
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
                        <td>$<?php echo $record['donation_amount']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>
     
    </div>
    <div id="report2" class="report-section" style="display: none;">
        <?php
        $sql = "SELECT t1.user_name, t1.email, t1.phoneno, t1.address, t1.date,
                t2.payment_method, t2.donation_amount
                FROM doner_registratration1 t1
                INNER JOIN payment1 t2 ON t1.phoneno = t2.phoneno";

        $result = $connection->query($sql);

        $records = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
        }

        $totalDonations = array_sum(array_column($records, 'donation_amount'));
        ?>

        <?php if (!empty($records)): ?>
            <h2>EDUCATION PROVIDER REPORT</h2>
            <p>Total Donations: <?php echo $totalDonations; ?></p>
            <p>Number of Donors: <?php echo count($records); ?></p>
            <p>Average Donation: <?php echo $totalDonations / count($records); ?></p>
            <div class="records">
                <button onclick="printReport()">Print Report</button>
            </div>
            <br>
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
                        <td><?php echo $record['user_name']; ?></td>
                        <td><?php echo $record['email']; ?></td>
                        <td><?php echo $record['phoneno']; ?></td>
                        <td><?php echo $record['address']; ?></td>
                        <td><?php echo $record['date']; ?></td>
                        <td><?php echo $record['payment_method']; ?></td>
                        <td>$<?php echo $record['donation_amount']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>
     
    </div>
    <div id="report3" class="report-section" style="display: none;">
        <?php
        $sql = "SELECT t1.name, t1.email, t1.phoneno, t1.address, t1.date,
                t2.payment_method, t2.donation_amount
                FROM doner_registratration2 t1
                INNER JOIN payment2 t2 ON t1.phoneno = t2.phoneno";

        $result = $connection->query($sql);

        $records = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
        }

        $totalDonations = array_sum(array_column($records, 'donation_amount'));
        ?>

        <?php if (!empty($records)): ?>
            <h2>HEALTH PROMOTION CHARITY REPORT</h2>
            <p>Total Donations: <?php echo $totalDonations; ?></p>
            <p>Number of Donors: <?php echo count($records); ?></p>
            <p>Average Donation: <?php echo $totalDonations / count($records); ?></p>
            <div class="records">
                <button onclick="printReport()">Print Report</button>
            </div>
            <br>
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
                        <td>$<?php echo $record['donation_amount']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>
     
    </div>
    <div id="report4" class="report-section" style="display: none;">
        <?php
        $sql = "SELECT t1.name, t1.email, t1.phoneno, t1.address, t1.date,
                t2.payment_method, t2.donation_amount
                FROM doner_registratration3 t1
                INNER JOIN payment3 t2 ON t1.phoneno = t2.phoneno";

        $result = $connection->query($sql);

        $records = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
        }

        $totalDonations = array_sum(array_column($records, 'donation_amount'));
        ?>

        <?php if (!empty($records)): ?>
            <h2>FAMILY & CHILDCARE TRUST REPORT</h2>
            <p>Total Donations: <?php echo $totalDonations; ?></p>
            <p>Number of Donors: <?php echo count($records); ?></p>
            <p>Average Donation: <?php echo $totalDonations / count($records); ?></p>
            <div class="records">
                <button onclick="printReport()">Print Report</button>
            </div>
            <br>
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
                        <td>$<?php echo $record['donation_amount']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>
     
    </div>
    
    <div id="report5" class="report-section" style="display: none;">
        <?php
        $sql = "SELECT t1.name, t1.email, t1.phoneno, t1.address, t1.date,
                t2.payment_method, t2.donation_amount
                FROM doner_registratration4 t1
                INNER JOIN payment4 t2 ON t1.phoneno = t2.phoneno";

        $result = $connection->query($sql);

        $records = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
        }

        $totalDonations = array_sum(array_column($records, 'donation_amount'));
        ?>

        <?php if (!empty($records)): ?>
            <h2>ANIMAL WELFARE GROUP REPORT</h2>
            <p>Total Donations: <?php echo $totalDonations; ?></p>
            <p>Number of Donors: <?php echo count($records); ?></p>
            <p>Average Donation: <?php echo $totalDonations / count($records); ?></p>
            <div class="records">
                <button onclick="printReport()">Print Report</button>
            </div>
            <br>
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
                        <td>$<?php echo $record['donation_amount']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>
     
    </div>
    <div id="report6" class="report-section" style="display: none;">
        <?php
        $sql = "SELECT t1.name, t1.email, t1.phoneno, t1.address, t1.date,
                t2.payment_method, t2.donation_amount
                FROM doner_registratration5 t1
                INNER JOIN payment5 t2 ON t1.phoneno = t2.phoneno";

        $result = $connection->query($sql);

        $records = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
        }

        $totalDonations = array_sum(array_column($records, 'donation_amount'));
        ?>

        <?php if (!empty($records)): ?>
            <h2>ART ASSOCIATIONS REPORT</h2>
            <p>Total Donations: <?php echo $totalDonations; ?></p>
            <p>Number of Donors: <?php echo count($records); ?></p>
            <p>Average Donation: <?php echo $totalDonations / count($records); ?></p>
            <div class="records">
                <button onclick="printReport()">Print Report</button>
            </div>
            <br>
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
                        <td>$<?php echo $record['donation_amount']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>
     
    </div>
    
    <script>
    function toggleReport(reportNumber) {
    var report = document.getElementById("report" + reportNumber);
    
    if (report.style.display === "block" || report.style.display === "") {
        report.style.display = "none";
    } else {
        report.style.display = "block";
    }
}
function printReport() {
            window.print();
        }
</script>

</body>
</html>
