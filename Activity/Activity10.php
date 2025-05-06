<?php
class  Student
{
    protected $uid;
    protected $name;
    protected $age;
    protected $gender;
    protected $phone;
    protected $address;
    protected $course;
    protected $year;
    protected $grade;
    protected $currentAttendence;
    protected $behavior;

    public function __construct($uid, $name, $age, $gender, $phone, $address, $course, $year, $grade, $currentAttendence, $behavior)
    {
        $this->uid =  $uid;
        $this->name =  $name;
        $this->age =  $age;
        $this->gender =  $gender;
        $this->phone =  $phone;
        $this->address =  $address;
        $this->course =  $course;
        $this->year =  $year;
        $this->grade =  $grade;
        $this->currentAttendence =  $currentAttendence;
        $this->behavior =  $behavior;
    }

    public function getStudentDetails()
    {
        echo "Stuent ID: {$this->uid} \n";
        echo "Stuent Name: {$this->name} \n";
        echo "Stuent Gender: {$this->gender} \n";
        echo "Stuent Contact: {$this->phone} \n";
        echo "Stuent Address: {$this->address} \n";
    }

    public function getAcadmicDetails()
    {
        echo "Course Name : {$this->course} \n";
        echo "Year : {$this->year} \n";
        echo "Grade: {$this->grade} \n";
        echo "Current Attandence: {$this->currentAttendence} \n";
    }

    public function getBehaviour()
    {
        echo "Behavior of {$this->name} : {$this->behavior}";
    }
}

$Student1 = new Student(1, "Dheeraj", 19, "Male", "1234567890", "Varanasi", "Btech", "2023", "A+", "90%", "Overall Good");

$Student1->getStudentDetails();
$Student1->getAcadmicDetails();
$Student1->getBehaviour();
