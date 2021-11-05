<?php
require_once('head.php');
require_once('person.php');
require_once('student.php');

require_once('helloworld.php');
require_once('helloworld.php');
require_once('helloworld.php');
require_once('helloworld.php');

$bjorn = new Person("Björn", 32); 

echo "My age is " . $bjorn->get_age() . "<br>";

var_dump($bjorn);

echo "<br><br>";

$frontend = new Student("Frontend20", 1, "CMS");

var_dump($frontend);