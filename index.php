<?php

echo "Hello world";

// This is a comment
# Also a comment
/*
Block comment 
*/

$name = "Frontend";
$year = null; 

echo "<h1>" . $name . $year . "</h1>";

echo isset($year);

define('PI', 3.141592654);

echo PI; 

$a = 5;
$b = 4;
$c = 1.2; 
$d = "3";

$b = (int)3.2; 
echo "<br> a=" . $a . "<br> b=" . $b ."<br> c=" . $c;

$big = 5723498469.2352341; 


echo "<br> big=" . number_format($big, 3, '.', '-') . "<br>";

$string1 = "Bjorn";
$string2 = 'Benny';

$string2 = str_replace("Benny", "Bjorn", $string2);

echo "<br> string1=" . strtolower($string1) . " contains " . strlen($string1) . " letters"; 
echo "<br> string2=" . strtoupper($string2) . " contains " . strlen($string2) . " letters";  

echo "<button style='background: red'>Error</button>";

echo "<br><br>";

$vegetables = array("Carrot", "Potato", "Cucumber");
$fruits = ["Banana", "Apple", "Orange"];

$fruits[0] = "Peach";
$fruits[] = "Banana";

array_push($fruits, "foo");
$foo = array_pop($fruits);

array_unshift($fruits, "bar");
$bar = array_shift($fruits);

sort($fruits);

echo "<br>" . $vegetables[0] . "<br>";
var_dump($fruits);
echo "<ul><li>" . implode('</li><li>',$fruits) . "</li></ul>";

echo $foo . $bar . " " . count($fruits) . "<br>";

$hobbies = [
    'Björn' => 'Fencing',
    'Ana' => 'Painting'
];

echo $hobbies['Björn'] . "<br>";

