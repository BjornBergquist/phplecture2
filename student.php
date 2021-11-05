<?php 
require_once('person.php');

class Student extends Person {
    public string $course; 

    public function __construct($name, $age, $course){
        $this->course = $course; 
        parent::__construct($name, $age);
    }
}
