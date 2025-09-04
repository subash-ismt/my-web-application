PHP Basics

 <h3> Syntax & Embedding in HTML  </h3> 

<?php
  echo "Hello, World!";
?>


— Standard PHP tag for embedding code within HTML.



<h3> Comments: </h3>

// Single-line comment


/* Multi-line
   comment */
 

<h3> Variables & Data Types: </h3>

Declaration:

$name = "Alice";   // String

$age = 25;         // Integer

$isMember = true;  // Boolean

$price = 9.99;     // Float

$items = null;     // NULL


<h3> Constant: </h3>

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.


To create a constant:

1) use the define() function.

Syntax
define(name, value);

2) using const keyword

const MYCAR = "Volvo";
echo MYCAR;

<h3> PHP echo and print Statements: </h3>
Both echo and print are used to output data to the screen.

The differences are small:

echo has no return value, while print has a return value of 1 so it can be used in expressions
echo can take multiple parameters, while print can take one argument
echo is marginally faster than print

 
<h3> Operators & Expressions: </h3>

Basic arithmetic: +, -, *, /, %

Ternary operator, Elvis, Null coalescing:

$status = $age >= 18 ? "Adult" : "Minor";
$user = $input['name'] ?? 'Guest';


 


<h3> Conditions & Control Flow </h3>

<li> if / elseif / else </li>

if ($age < 13) {
  echo "Child";
} elseif ($age < 20) {
  echo "Teenager";
} else {
  echo "Adult";
}

 

<li> switch  </li>

switch ($color) {
  case "red": echo "Red"; break;
  default: echo "Other";
}

 

  
<li> Loops </li>

for

for ($i = 0; $i < 5; $i++) {
  echo $i;
}


while / do...while

while ($n > 0) { echo $n--; }
do { echo $n; } while ($n > 0);


foreach

foreach ($arr as $item) {
  echo $item;
}

 
<h3> Functions: </h3>

1) Named functions

function greet($name = "Guest") {
  return "Hello, $name!";
}
echo greet("Bob");

 


2)  Anonymous / Arrow functions

$double = fn($x) => $x * 2;
echo $double(4);  // 8



 
<h3> Arrays </h3>

<li> Indexed </li>
ex-1:
$a = ["apple", "banana"]; 
ex-2:
$cars = array("Volvo", "BMW", "Toyota");

<li> Associative </li>
ex-2:
$b = ["first" => 1, "second" => 2];
ex-2:
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

<li> Multidimensional Array </li>
ex-1:
$m = [["x", "y"], ["z", "w"]];

ex-2:
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

foreach ($m as $row) {
  foreach ($row as $col) echo $col;
}


<h3> String </h3>
A string is a sequence of characters, like "Hello world!".
You can use double or single quotes, but you should be aware of the differences between the two.

Double quoted strings perform action on special characters.

E.g. when there is a variable in the string, it returns the value of the variable:

syntax: 
$x = "ISMTains";
echo "Hello $x";

output:<br>
<code> Hello JISMTains </code>

Single quoted string literals returns the string as it is:

$x = "ISMTains";
echo 'Hello $x'; 

output: <br>
<code> Hello $x </code>

Build in function for String operation:

1) Upper Case
The PHP strtoupper() function returns a string in upper case.

$x = "Hello World!";

echo strtoupper($x);

2) Lower Case
The PHP strtolower() function returns a string in lower case.

3) Replace String
The PHP str_replace() function replaces some characters with some other characters in a string.

Example
Replace the text "World" with "ISMTians":

$x = "Hello World!";
echo str_replace("World", "ISMTians", $x);

4) String Concatenation
To concatenate, or combine, two strings you can use the . operator:
example:  <br>
<code>
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
</code>

5) Slice a String
You can extract a part of a string by using the substr() function.

Specify the start index and the number of characters you want to return.

example 1: <br>
$x = "Hello World!";
echo substr($x, 6, 5);

output: <code> World </code>

example 2: 
By leaving out the length parameter, the range will go to the end:
Start the slice at index 6 and go all the way to the end:

$x = "Hello World!";

echo substr($x, 6);
output : <code> World! </code>

example 3: 
Use negative indexes will start the slice from the end of the string:

$x = "Hello World!";

echo substr($x, -5, 3);

output: <code> orl <code>

6) Escape Character: 
To insert characters that are illegal in a string, use an escape character.

An escape character is a backslash \ followed by the character you want to insert.

$x = "Regular Sentance "some random text" regular sentence continuer..";
To fix this problem, use the escape character \":

Example
$x = "Regular Sentance \"some random text\" regular sentence continuer..";

<h3> PHP Casting </h3>
Change Data Type
Casting in PHP is done with these statements:

<li>(string) - Converts to data type String </li>
<li>(int) - Converts to data type Integer</li>
<li>(float) - Converts to data type Float</li>
<li>(bool) - Converts to data type Boolean</li>
<li>(array) - Converts to data type Array</li>
<li>(object) - Converts to data type Object</li>
<li>(unset) - Converts to data type NULL</li>

Cast to String
To cast to string, use the (string) statement:

Example: 

$a = 5;       // Integer

$b = 5.34;    // Float

$c = "hello"; // String

$d = true;    // Boolean

$e = NULL;    // NULL

$a = (string) $a;

$b = (string) $b;

$c = (string) $c;

$d = (string) $d;

$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);

var_dump($b);

var_dump($c);

var_dump($d);

var_dump($e);

<h3> Sorting function of arrary: </h3>

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key


<li> Sort Array in Ascending Order - sort() </li>

The sort() function sort arrays in ascending order.

Sort the elements of the $cars array in ascending alphabetical order:

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

Example
Sort the elements of the $numbers array in ascending numerical order:

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
 


<li> Sort Array in Descending Order - rsort() </li>
The rsort() function sort arrays in descending order.

Example
Sort the elements of the $cars array in descending alphabetical order:

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
Example
Sort the elements of the $numbers array in descending numerical order:

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

<li> Sort Array - asort() </li>
The asort() function sort associative arrays in ascending order, according to the value.

Example
Sort an associative array in ascending order, according to the value:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

<li> Sort Array - ksort() </li>
The ksort() function sort associative arrays in ascending order, according to the key.

Example
Sort an associative array in ascending order, according to the key:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

<li> Sort Array - arsort() </li>
The arsort() function sort associative arrays in descending order, according to the value.

Example
Sort an associative array in descending order, according to the value:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

</li> Sort Array - krsort() </li>
The krsort() function sort associative arrays in descending order, according to the key.

Example
Sort an associative array in descending order, according to the key:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);



<h3> Date & Time: </h3>
echo date("Y-m-d H:i:s");



<h3> File Handling: </h3>
$fp = fopen("file.txt","r");
$content = fread($fp, filesize("file.txt"));
fclose($fp);


<h3> Cookies & Sessions: </h3>
setcookie("user", "Alice", time()+3600);
session_start();
$_SESSION['id'] = 123;
 
 
<h3>  Error Handling & Exceptions: </h3>
try {
  throw new Exception("Oops");
} catch (Exception $e) {
  echo $e->getMessage();
} finally {
  echo "Done";
}



<h3> JSON & API Data: </h3>
$json = json_encode(["name" => "Alice"]);
$obj = json_decode($json);
echo $obj->name;

 



<h3> Superglobals</h3>

The PHP superglobal variables are:

<li> $GLOBALS </li>
<li>$_SERVER </li>
<li>$_REQUEST</li>
<li>$_POST</li>
<li>$_GET</li>
<li>$_FILES</li>
<li>$_ENV</li>
<li>$_COOKIE</li>
<li>$_SESSION</li>

Example 1: 

$x = 100;

echo $GLOBALS["x"];
echo $x;

Example 2: 
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];

Example 3:

$_REQUEST['firstname']

Example 4: 

$name = $_POST['fname'];
echo $name;
$name = $_GET['fname'];
echo $name;
