<?php
// Appointment Page - City Glam Salon
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City Glam Salon - Book Appointment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Book an Appointment</h1>
        <form method="post" action="appointment.php">
            <label>Name:</label>
            <input type="text" name="name" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Service:</label>
            <select name="service">
                <option>Haircut & Styling</option>
                <option>Coloring & Highlights</option>
                <option>Manicure & Pedicure</option>
                <option>Facials & Skin Care</option>
                <option>Bridal Packages</option>
            </select>
            <label>Date:</label>
            <input type="date" name="date" required>
            <label>Time:</label>
            <input type="time" name="time" required>
            <button type="submit">Book Now</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $servername = "localhost";
            $username = "ismt";
            $password = "ismt@123";
            $dbname = "city-glam-db";
            $port = 3355;

            // Get and sanitize input
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $service = trim($_POST['service']);
            $date = $_POST['date'];
            $time = $_POST['time'];

            // Basic validation
            if ($name && $email && $service && $date && $time) {
                $conn = new mysqli($servername, $username, $password, $dbname, $port);
                if ($conn->connect_error) {
                    echo '<p style="color:red;">Connection failed: ' . $conn->connect_error . '</p>';
                } else {
                    $stmt = $conn->prepare("INSERT INTO appointments (name, email, service, date, time) VALUES (?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssss", $name, $email, $service, $date, $time);
                    if ($stmt->execute()) {
                        echo '<p style="color:green;">Thank you, ' . htmlspecialchars($name) . '! Your appointment has been booked.</p>';
                    } else {
                        echo '<p style="color:red;">Error booking appointment: ' . $stmt->error . '</p>';
                    }
                    $stmt->close();
                    $conn->close();
                }
            } else {
                echo '<p style="color:red;">Please fill in all fields.</p>';
            }
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
