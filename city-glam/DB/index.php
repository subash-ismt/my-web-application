<?php
// Home Page - City Glam Salon
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City Glam Salon - Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .hero {
            background: linear-gradient(90deg, #a83267 60%, #ffd6e0 100%);
            color: #fff;
            padding: 60px 0 40px 0;
            text-align: center;
            border-radius: 0 0 40px 40px;
        }
        .hero h1 {
            color: #000;
            font-size: 2.8em;
            margin-bottom: 18px;
            letter-spacing: 2px;
        }
        .hero p {
            font-size: 1.3em;
            margin-bottom: 28px;
        }
        .cta-btn {
            background: #fff;
            color: #a83267;
            border: none;
            padding: 16px 38px;
            border-radius: 8px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(168,50,103,0.12);
            transition: background 0.2s, color 0.2s;
        }
        .cta-btn:hover {
            background: #ffd6e0;
            color: #a83267;
        }
        .features {
            display: flex;
            justify-content: space-around;
            margin: 48px 0 0 0;
            flex-wrap: wrap;
        }
        .feature {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(168,50,103,0.08);
            padding: 28px 22px;
            margin: 12px;
            width: 220px;
            text-align: center;
        }
        .feature h3 {
            color: #a83267;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="hero">
        <h1>Welcome to City Glam Salon</h1>
        <p>Your beauty, our passion.<br>Experience the best salon services in town!</p>
        <a href="appointment.php"><button class="cta-btn">Book Your Appointment</button></a>
    </div>
    <div class="container">
        <h2 style="text-align:center; color:#a83267; margin-bottom:32px;">Why Choose Us?</h2>
        <div class="features">
            <div class="feature">
                <h3>Expert Stylists</h3>
                <p>Our team is highly trained and passionate about beauty.</p>
            </div>
            <div class="feature">
                <h3>Premium Products</h3>
                <p>We use only the best products for your hair and skin.</p>
            </div>
            <div class="feature">
                <h3>Relaxing Ambience</h3>
                <p>Enjoy a luxurious and comfortable salon experience.</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
