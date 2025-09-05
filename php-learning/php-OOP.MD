# PHP Object Oriented Programming (OOP)

Object Oriented Programming (OOP) is a programming paradigm based on the concept of "objects", which can contain data (properties) and code (methods). OOP helps organize code, promote reusability, and make complex applications easier to manage.

## Key Concepts in PHP OOP

- **Class**: A blueprint for objects. Defines properties and methods.
- **Object**: An instance of a class.
- **Property**: A variable inside a class.
- **Method**: A function inside a class.
- **Constructor**: A special method called when an object is created.
- **Inheritance**: Allows a class to inherit properties and methods from another class.
- **Encapsulation**: Restricts direct access to some of an object's properties and methods.
- **Polymorphism**: Allows objects to be treated as instances of their parent class.

## Example: Simple PHP OOP

```php
<?php
// Define a class
class Person {
    // Properties
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method
    public function greet() {
        return "Hello, my name is $this->name and I am $this->age years old.";
    }
}

// Create an object
$person1 = new Person("Alice", 30);

// Access method
echo $person1->greet();
?>
```

## Inheritance Example

```php
<?php
class Employee extends Person {
    public $position;

    public function __construct($name, $age, $position) {
        parent::__construct($name, $age); // Call parent constructor
        $this->position = $position;
    }

    public function showPosition() {
        return "$this->name is an $this->position.";
    }
}

$employee1 = new Employee("Bob", 25, "Engineer");
echo $employee1->greet(); // Inherited method
echo $employee1->showPosition();
?>
```

## Encapsulation Example

```php
<?php
class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
echo $account->getBalance(); // 100
?>
```

## Summary
- OOP in PHP helps organize code using classes and objects.
- Use properties and methods to define behavior and data.
- Inheritance, encapsulation, and polymorphism are powerful OOP features.

For more details, see the [PHP OOP documentation](https://www.php.net/manual/en/language.oop5.php).
