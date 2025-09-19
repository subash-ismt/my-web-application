<?php
// admin-add-service.php - Add new service (admin only)
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

$servername = "localhost";
$username = "ismt";
$password = "ismt@123";
$dbname = "city-glam-db";
$port = 3355;

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $icon = trim($_POST['icon']);
    if ($name && $description && $icon) {
        $conn = new mysqli($servername, $username, $password, $dbname, $port);
        if ($conn->connect_error) {
            $message = '<span style="color:red;">Connection failed: ' . $conn->connect_error . '</span>';
        } else {
            $stmt = $conn->prepare("INSERT INTO services (name, description, icon) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $description, $icon);
            if ($stmt->execute()) {
                $message = '<span style="color:green;">Service added successfully!</span>';
            } else {
                $message = '<span style="color:red;">Error: ' . $stmt->error . '</span>';
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        $message = '<span style="color:red;">Please fill in all fields.</span>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Service (Admin)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add New Service</h1>
        <?php if ($message) echo $message; ?>
        <form method="post" action="admin-add-service.php">
            <label>Service Name:</label>
            <input type="text" name="name" required>
            <label>Description:</label>
            <textarea name="description" required></textarea>
            <label>Icon (emoji or HTML):</label>
            <input type="text" name="icon" required>
            <button type="submit">Add Service</button>
        </form>
        <p><a href="admin-dashboard.php">Back to Admin Dashboard</a></p>
    </div>
</body>
</html>
