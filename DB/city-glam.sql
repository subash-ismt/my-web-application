/*
This SQL script creates the necessary tables for the City Glam salon website.
It includes tables for appointments, messages, and services.

*/

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    service VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    icon VARCHAR(50)
);


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample admin user (password: admin123, hashed)
INSERT INTO users (username, password, role) VALUES
('admin', '$2y$10$/x5uGPjtjXWsc7enh33CJeQ9OBLT3JnVIubzi5AGPDAGH.g2vwfA2', 'admin');

// Sample data for services table

INSERT INTO services (name, description, icon) VALUES
('Haircut & Styling', 'Trendy cuts, expert styling, and personalized looks for every occasion. Our stylists ensure you leave looking and feeling fabulous.', '💇‍♀️'),
('Coloring & Highlights', 'Vibrant colors, natural highlights, balayage, and more. We use premium products for healthy, beautiful hair color results.', '🎨'),
('Manicure & Pedicure', 'Relax and pamper yourself with our luxurious nail care. Choose from classic, gel, or spa treatments for hands and feet.', '💅'),
('Facials & Skin Care', 'Rejuvenate your skin with our range of facials and treatments. We tailor each session to your skin type for glowing results.', '🌸'),
('Bridal Packages', 'Complete bridal beauty solutions including hair, makeup, and nails. Let us make your special day truly glamorous!', '👰');

