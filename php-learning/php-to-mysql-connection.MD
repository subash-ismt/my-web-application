# PHP to MySQL Connection Guide

This guide explains how to connect a PHP application to a MySQL database and retrieve data, using the City Glam Salon app as an example.

## 1. Database Connection

Use the `mysqli` extension to connect PHP to MySQL. Here is a basic example:

```php
<?php
$servername = "localhost";
$username = "root";
$password = ""; // Use your MySQL password if set
$dbname = "city_glam"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

## 2. Fetching Data Example

To get all services from the `services` table:

```php
$sql = "SELECT * FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Service: " . $row["service_name"] . " - Price: " . $row["price"] . "<br>";
    }
} else {
    echo "No services found.";
}
```

## 3. Closing the Connection

Always close the connection after your queries:

```php
$conn->close();
```

## 4. Full Example

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "city_glam";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Service: " . $row["service_name"] . " - Price: " . $row["price"] . "<br>";
    }
} else {
    echo "No services found.";
}

$conn->close();
?>
```

## Notes
- Change database credentials as needed.
- Make sure the `services` table and columns exist in your database.
- For Security Issue, use prepared statements to prevent SQL injection.
