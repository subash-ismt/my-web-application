<?php

$servername = "localhost";
$username = "ismt";
$password =  'ismt@123';
$dbname = "city-glam-db";
$port = 3355; // if you have a custom port, set it here, for default 3306 no need to pass it

// Create connection


$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: (" . $conn->connect_errno . ") " . $conn->connect_error . "<br>" .
        "Host: $servername<br>User: $username<br>DB: $dbname<br>Port: $port");
}


$sql = "SELECT * FROM services";
$result = $conn->query($sql);

// var_dump($result);

// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "Service: " . $row["name"] . " - Description: " . $row["description"] . "<br>";
//     }
// } else {
//     echo "No services found.";
// }
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City Glam Salon - Services</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .services-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 28px;
            margin-top: 32px;
        }
        .service-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(168,50,103,0.08);
            padding: 32px 24px;
            width: 260px;
            text-align: center;
            transition: transform 0.2s;
        }
        .service-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 6px 24px rgba(168,50,103,0.15);
        }
        .service-icon {
            font-size: 2.5em;
            margin-bottom: 16px;
            color: #a83267;
        }
        .service-title {
            color: #a83267;
            font-size: 1.3em;
            margin-bottom: 10px;
        }
        .service-desc {
            color: #555;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1 style="text-align:center; color:#a83267;">Our Services</h1>
       <?php
       

        if ($result->num_rows > 0) {
            echo '<div class="services-list">';
            while($row = $result->fetch_assoc()) {
                echo '<div class="service-card">';
                echo '<div class="service-icon">' . htmlspecialchars($row["icon"]) . '</div>';
                echo '<div class="service-title">' . htmlspecialchars($row["name"]) . '</div>';
                echo '<div class="service-desc">' . htmlspecialchars($row["description"]) . '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo "<p>No services found.</p>";
        }
        ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
