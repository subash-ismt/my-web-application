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


## 5. Using PDO for MySQL Connection

PDO (PHP Data Objects) is a flexible and secure way to connect to databases. It supports prepared statements and works with multiple database types.

### Basic PDO Connection Example

```php
<?php
$dsn = "mysql:host=localhost;dbname=city_glam;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully (PDO)!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
```

### Fetching Data with PDO

```php
$stmt = $pdo->query("SELECT * FROM services");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Service: " . $row["service_name"] . " - Price: " . $row["price"] . "<br>";
}
```

### Using Prepared Statements (Recommended)

```php
$stmt = $pdo->prepare("SELECT * FROM services WHERE service_name = ?");
$stmt->execute(["Haircut & Styling"]);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row["service_name"];
}
```

---


## 6. PHP Sessions Explained

Sessions in PHP allow you to store user information (like login state) across multiple pages. Session data is stored on the server, and the browser only keeps a session ID cookie.

### Starting a Session

Start a session at the top of your PHP file:

```php
<?php
session_start();
?>
```

### Storing Data in Session

```php
$_SESSION['username'] = 'admin';
$_SESSION['role'] = 'admin';
```

### Accessing Session Data

```php
echo $_SESSION['username']; // outputs 'admin'
```

### Example: Restricting Access to Admins

```php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}
```

### Destroying a Session (Logout)

```php
session_start();
session_destroy();
header('Location: login.php');
exit();
```

---

**Notes:**
- Session data is not visible in the browser, only the session cookie (usually `PHPSESSID`).
- Use `var_dump($_SESSION);` for debugging session data (remove after use).
- Always call `session_start()` before using `$_SESSION`.
