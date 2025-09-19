<?php
// admin-dashboard.php - Example admin page with access control

session_start();

var_dump($_SESSION);

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav style="background:#a83267;padding:16px 0 8px 0;margin-bottom:32px;">
        <div style="max-width:900px;margin:0 auto;display:flex;gap:24px;align-items:center;">
            <a href="admin-dashboard.php" style="color:#fff;font-weight:bold;text-decoration:none;">Dashboard</a>
            <a href="admin-add-service.php" style="color:#fff;text-decoration:none;">Add Service</a>
            <a href="admin-appointments.php" style="color:#fff;text-decoration:none;">View Appointments</a>
            <a href="admin-messages.php" style="color:#fff;text-decoration:none;">View Messages</a>
            <span style="flex:1 1 auto;"></span>
            <a href="logout.php" style="color:#fff;text-decoration:none;">Logout</a>
        </div>
    </nav>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> (Admin)</h1>
        <p>Use the navigation bar above to manage services, appointments, and messages.</p>
    </div>
</body>
</html>
