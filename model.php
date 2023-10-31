<?php

class Diary {
    private $student;
    private $subjects = [];

    public function __construct($student) {
        $this->student = $student;
    }

    public function addSubject($subject) {
        $this->subjects[] = $subject;
    }

    public function getSubjects() {
        return $this->subjects;
    }

    public function getStudent() {
        return $this->student;
    }
}

class Subject {
    private $name;
    private $grade;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function getName() {
        return $this->name;
    }
}

class Student {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}


$student = new Student("Amin");
$diary = new Diary($student);

$engineering = new Subject("System Engineering");
$engineering->setGrade(4);

$math = new Subject("math");
$math->setGrade(5);

$diary->addSubject($math);
$diary->addSubject($engineering);

echo "Student: " . $diary->getStudent()->getName() . "\n";
echo "Subjects:\n";
foreach ($diary->getSubjects() as $subject) {
    echo $subject->getName() . ": " . $subject->getGrade() . "\n";
}
