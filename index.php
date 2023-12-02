<?php
include 'Person.php';

// Create an instance of the Person class
$person = new Person("Alice", 30);

// Display information about the person
echo "Name: " . $person->getName() . "\n";
echo "Age: " . $person->getAge() . "\n";
?>
