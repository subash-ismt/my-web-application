<?php
// Services Page - City Glam Salon
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
        <div class="services-list">
            <div class="service-card">
                <div class="service-icon">💇‍♀️</div>
                <div class="service-title">Haircut & Styling</div>
                <div class="service-desc">Trendy cuts, expert styling, and personalized looks for every occasion. Our stylists ensure you leave looking and feeling fabulous.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <div class="service-title">Coloring & Highlights</div>
                <div class="service-desc">Vibrant colors, natural highlights, balayage, and more. We use premium products for healthy, beautiful hair color results.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">💅</div>
                <div class="service-title">Manicure & Pedicure</div>
                <div class="service-desc">Relax and pamper yourself with our luxurious nail care. Choose from classic, gel, or spa treatments for hands and feet.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">🌸</div>
                <div class="service-title">Facials & Skin Care</div>
                <div class="service-desc">Rejuvenate your skin with our range of facials and treatments. We tailor each session to your skin type for glowing results.</div>
            </div>
            <div class="service-card">
                <div class="service-icon">👰</div>
                <div class="service-title">Bridal Packages</div>
                <div class="service-desc">Complete bridal beauty solutions including hair, makeup, and nails. Let us make your special day truly glamorous!</div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
