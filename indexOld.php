<?php

/*echo "Hello world";

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

$content = "En lång mening med massor av vettig information till användaren.";

if(isset($content)):?>
    <p><?php echo $content ?></p>
<?php else:?>
    <p>This page lacks content</p>
<?php endif;

$age = 10; 
if ($age == 10){
    echo "You're ten years old<br>";
} elseif ($age >= 18){
    echo "You are legally an adult<br>";
} else {
    echo "You're still a kid<br>";
}

echo $age >= 18 
    ? "You're able to vote<br>" 
    : "You have to wait to be able to vote<br>";

//$name = null;

//$user = isset($name) ? $name : 'John Doe'; 
$user = $name ?? 'John Doe';
echo $user . "<br>";

$type = "warning";
echo "<button ";
switch ($type){
    case 'error':
        echo  'style="background:red"';
    case 'warning':
        echo  'style="background:orange"';
    default: 
        echo 'style="background:lightblue"';
}
echo ">Click Me!</button><br>";

$i = 0;
echo "While i: ";
while($i < 10){
    echo $i . ' ';
    $i++;
}
echo "<br>";

$j = 0;
echo "Do-while j: ";
do{
    echo $j . ' ';
    $j++; 
} while ($j < 10);
echo "<br>";

echo "For k: ";
for($k = 0; $k<10; $k++){
    echo $k . ' ';
}
echo "<br>";

echo '<ol>';
foreach($fruits as $fruit){
    echo "<li>$fruit</li>";
}
echo '</ol>';

foreach($fruits as $i => $fruit){
    echo $i . ": " . $fruit . "<br>";
}
echo "<br>";

$hobbies = [
    'Björn' => ['Fencing', 'Gaming', 'Programming'],
    'Ana' => 'Painting'
];

foreach($hobbies as $key => $value){
    if (is_array($value)){
        echo $key . ": " . implode(', ', $value). "<br>";
    } else {
        echo $key . ": " . $value . "<br>";
    }
}

function hello(){
    echo "Hello!<br>";
}

hello();

function sum($num1, $num2){
    return $num1 + $num2;
}
echo sum(1,2) . "<br>";

$sum = fn($num1, $num2) => $num1 + $num2; 

echo $sum(1,2) . "<br>";

function create_button($title, $bgcolor, $color){
    echo "<button style='
            background:$bgcolor; 
            color:$color'
        >
            $title
        </button>";
}

create_button("Error", "red","white");
create_button("Click me", "lightblue","black");
