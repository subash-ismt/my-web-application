<h3> PHP Form Handling: </h3>

<h4> contact.html file: </h4>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP Form Handling</title>
</head>
<body>
  <h1>Contact Form</h1>
  <form action="process.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="5" cols="30" required></textarea><br><br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>

form layout:

<code>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP Form Handling</title>
</head>
<body>
  <h1>Contact Form</h1>
  <form action="process.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="5" cols="30" required></textarea><br><br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>
</code>

 
<h4> process.php file: </h4>

```
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo "<h1>Form Submitted</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";

} else {
    echo "Invalid Request!";
}

?>
```



<h4> FORM Validation: </h4>

There are different in build methods which can be used while validating form data.

1) empty() → check if the value is present in the varaible;

example: 

 ```

if (empty($_POST["name"])) {
    echo "Name is required!";
}

```
 

2) trim() → removes whitespace from start/end.

example:
```
$name = trim($_POST["name"]);
```

3) stripslashes() → removes backslashes.

example: 
```
$name = stripslashes($name);
```

4) htmlspecialchars() → converts < and > into safe characters to prevent XSS.

Example: 
```
$name = htmlspecialchars($name);
```

5) Validate string formats with filter_var()

Example:
``` 

✅ Email validation
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format!";
}

✅ Integer validation
$age = $_POST["age"];
if (!filter_var($age, FILTER_VALIDATE_INT)) {
    echo "Age must be an integer!";
}

```

6) String length:

retur the length of the string

```
if (strlen($password) < 6) {
    echo "Password must be at least 6 characters long!";
}
```
7) Check if the data is numeric

   is_numeric() → checks if value is number.
  
8) Regualar Expression / Pattern Matching:

<li> Used for custom formats (like password rules, phone numbers). </li>

<li> Example: password must contain at least 1 uppercase, 1 lowercase, 1 digit, and be 8+ chars. </li>

Example: 
```
$password = $_POST["password"];
if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/", $password)) {
    echo "Password must be at least 8 characters, include uppercase, lowercase, and a number.";
}


```
Checkout below link the cheatsheet for the the regular expression
https://www.rexegg.com/regex-quickstart.php
