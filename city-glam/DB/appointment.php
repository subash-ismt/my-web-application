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
            echo '<p>Thank you, ' . htmlspecialchars($_POST['name']) . '! Your appointment has been booked.</p>';
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
