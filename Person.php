<?php
class Person {
    private $name;
    private $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}
?>
