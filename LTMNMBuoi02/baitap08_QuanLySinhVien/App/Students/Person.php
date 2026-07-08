<?php
namespace App\Students;
class Person
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function hienThi()
    {
        echo "Tên: $this->name <br>";
        echo "Tuổi: $this->age <br>";
    }
}