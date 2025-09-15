<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "ismt";
    $password = "ismt@123";
    $dbname = "city-glam-db";
    $port = 3355;

    // Get and sanitize input
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    $stmt->execute();

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City Glam Salon - Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Contact Us</h1>
        <form method="post" action="contact.php">
            <label>Name:</label>
            <input type="text" name="name" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Message:</label>
            <textarea name="message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<p>Thank you, ' . htmlspecialchars($_POST['name']) . '! We have received your message.</p>';
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
