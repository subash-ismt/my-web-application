<?php
// Contact Us Page - City Glam Salon
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
