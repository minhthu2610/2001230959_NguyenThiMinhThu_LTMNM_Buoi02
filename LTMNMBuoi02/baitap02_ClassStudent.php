<?php
class Student {
    private $name;
    private $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function display() {
        echo "Name: {$this->name}, Age: {$this->age}<br>";
    }
    public function __destruct() {
        echo "Doi tuong Student da bi huy.<br>";
    }
}

//tao doi tuong
$student = new Student("Nguyen Thi Minh Thu",20);
$student->display();
?>