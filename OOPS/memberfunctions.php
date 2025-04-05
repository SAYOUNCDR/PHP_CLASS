<?php
class Student {
    public $name;
    public $age;
    public $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function displayDetails() {
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Grade: " . $this->grade . "\n";
    }
    public function hasPassed() {
        if ($this->grade >= 50) {
            echo $this->name . " has passed.\n";
        } else {
            echo $this->name . " has not passed.\n";
        }
    }
}

$student1 = new Student("Alice", 20, 85);
$student2 = new Student("Bob", 18, 45);

//calling the member functions using the object
$student1->displayDetails();
$student1->hasPassed();

$student2->displayDetails();
$student2->hasPassed();