<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>TEST ONE</title>
</head>

<body>


<!-- We can write it as "Hello World" but we did it like that because we should put semicolon after echo to be printed if that not the end. But in the end there no need to put ; -->
<p>
    <?php echo "Hello"; echo " World" ?>
</p>


<?php

//Variable and we can write it in different ways and the definition of variable (متغير)is: A variable is “variable” because its value varies. In variable the value can be assigned and changed at anytime without issue. Also variable can be used without assigning a value(which is not recommended).
$car = "Toyota";
$_car = "Toyota";
$carOne = "Toyota";
$car1987 = "Toyota";
$familyName = "Alharbi";

//Constant and the definition of Constant (ثابت) is: In constant the value cannot be changed by the user also,it remains constant through out the program.
//A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
//A valid constant name starts with a letter or underscore (no $ sign before the constant name).
//Note: Unlike variables, constants are automatically global across the entire script.
define ('company', 'GMC');
?>

<p> Your car is: <?php echo $car ?></p>

<?php
//We can see here that we changed the vale of $car variable without any issue because in variable you can change the value any time.
$car = "Nissan";
echo company;
?>

<p> <?php echo $car ?></p>

<!-- echo and print are constructs -->
<?php

//echo ('Hi'); we can write it like that but because it's a construct, we should write like this echo "Hi";

//echo can print more than one string and variables as well
echo "Hi", ": ", "Norah ", "$familyName";

//To put a new line
echo "<br>";

//We can also use echo to print HTML elements
echo "<b> I will be a master full stack developer </b>";

//print ('Hi'); we can ae well write it like that
//print can just type one string and also print always return a value (1) which make echo faster
print ", That's right you will be!";
echo "<br>";
?>

<!-- PHP supports the following data types:
- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource -->

<?php

$a = 1;
//echo '$a'; In single quotation we can't print a variable unless do it like below, and we need escape to do add ', $, ", \ or new line or tape
echo 'Since now I will change my life and I\'m damn able to do it for sure!';
echo "<br>";
$name ="Rawabi";
echo 'Your name is: ' .$name;
echo "<br>";
echo 'Your name is: ' ."<b>$name</b>";
echo "<br>";
?>

<?php

//array  .. there are two different way to write an array but I don't know which one is correct but in first one, we put the values
$colors = ['Red' => '#FF0000', 'black' => '#000000'];
$cars = array("Volvo","BMW","Toyota");

//Boolean
$x = true;
$y = false;

//Null
$n = NULL;
var_dump($n);

echo "<br>";

$m = "Hello World!";
$m = NULL;
var_dump($m);

echo "<br>";
?>


<?php

//Object
class User
{

    public $name = 'Nawaf';

    function greet()
    {

        return 'Hello ' . $this->name;
    }
}
// create an object
$user = new User;
echo $user->greet();

echo "<br>";

//class Car
//{
//    function Car()
//    {
//        $this->model = "BMW";
//    }
//}
//// create an object
//$name = new Car();
//echo $name->model;

echo "<br>";
?>

<?php
//A resource is a special variable, holding a reference to an external resource. Resource variables typically hold special handlers to opened files and database connections.
// Open a file for reading
$file = fopen("Notes.txt", "r");
var_dump($file);
//var_dump is a function to identify the variables

// Connect to MySQL database server with default setting
//$link = mysql_connect("localhost", "root", "root");
//var_dump($link);

echo "<br>";
?>

<!--
The examples of thing need an escape
\n => New line or line feed
\r => Carriage Return
\r\n => It seems that there no difference between \n, \r and \r\n all of them give a new line
\t => Tap
\"
\$
\\
-->
<?php

echo "<pre>";
echo "Hi \"My Future\" , I know you hide a lot of \$ and happiness for me \r\nBut not just that, You will make me => \t very powerful!!";
echo "<pre>";

echo ("Hello \rWorld");
echo "<br>";
echo ("Hello \nWorld");
?>

<?php
$string = "Welcome to my world";

//Count the letters
echo strlen($string);
echo "<br>";

//count the words
echo str_word_count($string);
echo "<br>";

//replace the words and don't forget that PHP is keyboard sensitive
echo str_replace('Welcome', 'Hello', $string);
echo "<br>";

//flip over the words
echo strrev($string);

?>

<?php

$a = 1;
$b = 1;
$c = 2;
$d = "1";

// == just compare between values and doesn't matter what the type of the data but === compare between the values and the data type
var_dump($a == $d);
var_dump($a === $d);

// != and !== it mean (Is not equal)
var_dump($a != $d);
var_dump($a !== $d);

//We also know that we have >, <, >= and <=

?>

<?php

$ahmedAge = 25;
$fatemhAge = 23;

if ($ahmedAge < $fatemhAge) {
    echo "Ahmed older than Fatemh!";
}else {
    echo "The ages are not correct!";
}

?>

<?php

$orderOneWeight = 25;
$standardWeight = 23;
$orderThreeWeight = 20;

if ($orderOneWeight > $standardWeight) {
    echo "You can't ship this order!";
}elseif($orderThreeWeight < $standardWeight) {
    echo "You can ship this order!";
}else {
    echo "We not able to ship anything currently!";
}

?>

<?php

$orderOneWeight = 25;
$standardWeight = 23;
$orderThreeWeight = 20;

if ($orderOneWeight < $standardWeight) {
    echo "You can't ship this order!";
}elseif($orderThreeWeight < $standardWeight) {
    echo "You can ship this order!";
}else {
    echo "We not able to ship anything currently!";
}

?>

<?php


$orderOneWeight = 25;
$standardWeight = 23;
$orderThreeWeight = 20;

if ($orderOneWeight < $standardWeight) {
    echo "You can't ship this order!";
}elseif($orderThreeWeight > $standardWeight) {
    echo "You can ship this order!";
}else {
    echo "We not able to ship anything currently!";
}

?>


<?php
/*

$laptop = 1500;
$camera = 300;
$mobile = 200;

if($laptop < $camera){
echo "I want buy the camera";
}elseif ($mobile < $camera) {
echo "I want buy the mobile";
}else{
echo "I don't wanna buy anything";
}

*/

$laptop = 1500;
$camera = 300;
$mobile = 200;

$laptop < $camera ? $message = "I want buy the camera" : $message = "I want buy the mobile";

echo $message;

?>

<?php
//isset is making sure if something exist or not, So because $total is exist, it gave me one but if we delete $total, then it will give me zero.
$total = 1;
$result = 0;

//isset($total) ? $result = $total : $result = 0;
//
//echo $result;

$check = $total ? $message = "موجود" :  $message = "غير موجود";
echo $message;
?>

<?php

//If we put Ahamd it will say welcome Ahamd and same thing with Dalal
$userName = "Mogeeb";

switch ($userName) {
    case "Ahamd":
        echo "Welcome Ahamd";
    break;

    case "Dalal":
        echo "Welcome Dalal";
    break;

    case "Mogeeb":
        echo "Welcome Mogeeb";
    break;
}
?>

<?php

$x = 10;
$y = 4;

echo ($x + $y);
echo "<br>";
echo ($x - $y);
echo "<br>";
echo ($x * $y);
echo "<br>";
echo ($x / $y);
echo "<br>";
//الباقي من عملية القسمة
echo ($x % $y);
?>

<?php
//Indexed Arrays
$names = ['Amal', 'Fahad', 'Ahmad', 'Ali', 'Dalal'];

//sort for the values from A to Z or From 0 to ......
sort($names);
//rsort($names); opposite sort
print_r($names);
echo $names[4];
?>

<?php
//Associative Arrays
$ages = ['Amal' => 3, 'Fahad' => 30, 'Ahmad' => 20, 'Ali' => 15, 'Dalal' => 2];

//sort for the values from A to Z or From 0 to ......
asort($ages);
//arsort($ages); opposite asort
//ksort($people); sort the keys not the values
//krsort($people); opposite ksort
//(print_r) same like (var_dump). As well, the way how the array look like in the browser, it's because we used before <pre>
print_r($ages);

echo "Amal age is: ". $ages['Amal'];
?>

<?php

$people = [
        ['name' => 'Amal', 'age' => 3, 'address' => 'Saudia'],
        ['name' => 'Fahad', 'age' => 30, 'address' => 'UAE'],
        ['name' => 'Ahmad', 'age' => 20, 'address' => 'Egypt'],
        ['name' => 'Ali', 'age' => 15, 'address' => 'Oman'],
        ['name' => 'Dalal', 'age' => 2, 'address' => 'Bahrian'],

];


print_r($people);

echo 'Ahmad live in: '. $people[2]['address'];

?>

<?php

//$i = 0;

//While means do something while some condition exits .. so in the example below it's says print $i which mean 0 because this the value of $i if $i < 10 which it is! Therefore, the result will be print 0 infinitely
//while ($i < 10) {
//    echo "<div>$i</div>";
//}
//
?>

<?php

echo "<p>The result is from 0 to 9 </p>";
$i = 0;
while ($i < 10) {

    echo "<div>$i</div>";
    $i++;
}

//echo "<p>The result is from 0 to 10 </p>";
//while ($i <= 10) {
//
//    echo "<div>$i</div>";
//    $i++;
//}

echo "<p>The result is 10 from a different while </p>";
while ($i >= 10) {

    echo "<div>$i</div>";
    $i--;
}

//$i = 10;
//echo "<p>The result is from 9 to 1 from a different while </p>";
//while ($i > 0) {
//
//    echo "<div>$i</div>";
//    $i--;
//}

//echo "<p>The result is from 9 to 0 form a different while </p>";
//while ($i >= 0) {
//
//    echo "<div>$i</div>";
//    $i--;
//}
?>

<?php

$i = 0;
echo "<p>The result is from 0 to 9 from do while </p>";
do {

    echo "<div>$i</div>";
    $i++;
//if we put $i++ before echo the result will be from 0 to 10
}
while ($i < 10);

?>

<?php
//
//phpinfo();
//
//
//?>

<?php

echo "The result is from 0 to 9 from for";
for ($i = 0; $i < 10; $i++){

    echo "<div>$i</div>";
}

//$var = 10;
//for ($i = 0; $i < $var; $i++){

//    echo "<div>$i</div>";
//}

?>

<?php
//when I put the functions after the arrays didn't print and I don't why!
function greetUser() {
    return "Welcome to our website!";
}
echo greetUser();

?>


<?php

function greetGuest() {
    $guest = "Hadel";
    $age = 15;
    return "$guest is $age years old!";
}
echo greetGuest();

?>

<?php

function greetStudent($user, $grade){
    return "$user got $grade last year!";
}
echo greetStudent("Sara", "A+");

?>

<?php
//
//function greetStudent($user, $grade){
//    echo "$user got $grade last year!";
//}
//greetStudent("Sara", "A+");
//?>

<?php
//function greetStudent($user, $grade){
//return "$user got $grade last year!<br>";
//}
//echo greetStudent("Sara", "A+");
//echo greetStudent("Huda", "B+");
//echo greetStudent("Lora", "C+");
//
//?>

<?php

function total ($price, $tax) {
    return $price + $tax;
}
echo total(500, 25);

?>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//function average ($price, $tax = 100) {
//    return $price + $tax;
//}
//echo average(500);

function average ($price, $tax = 100) {
    return $price + $tax;
}
echo average(500, $tax = 50);

//function average ($price, $tax = null) {
//    return $price + $tax;
//}
//echo average(500);

?>

<?php

$name = 'Saleh';

function greetProf(){
    global $name;
    echo "We wish for you the best ".$name;
}
greetProf();

?>

<?php
//foreach is a loop for arrays
$names = ['Amal', 'Fahad', 'Ahmad', 'Ali', 'Dalal'];

foreach ($names as $name) {
    echo "<div>Hello $name</div>";
}

?>

<?php
//here we can print the index for each value and we mean by index is the keys [0], [1], ....
$names = ['Amal', 'Fahad', 'Ahmad', 'Ali', 'Dalal'];

foreach ($names as $key => $name) {

    echo "<div>Hello $name index: $key</div>";
}

?>

<?php
//here we can print until key number 2
$names = ['Amal', 'Fahad', 'Ahmad', 'Ali', 'Dalal'];

foreach ($names as $key => $name) {

    echo "<div>Hello $name index: $key</div>";
    if ($key == 2){
        die();
    }

}

?>






</body>

</html>