<?php
namespace App\Students;
class Student extends Person
{
    public $studentID;

    public function __construct($name, $age, $studentID)
    {
        parent::__construct($name, $age);
        $this->studentID = $studentID;
    }

    public function hienThi()
    {
        parent::hienThi();
        echo "Mã sinh viên: $this->studentID <br>";
    }
}