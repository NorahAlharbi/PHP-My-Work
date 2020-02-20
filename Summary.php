<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Summary</title>
</head>

<body>

<?php
//A Variables are "containers" for storing information and in variables the value can be assigned and changed at any time without issue.
//Also variable can be used without assigning a value (which is not recommended).
//Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.
//A variable starts with the $ sign, followed by the name of the variable.
//A variable name must start with a letter or the underscore character.
//A variable name cannot start with a number.
//A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ).
//Variable names are case-sensitive ($age and $AGE are two different variables).

$car = "Toyota";

//Constants are like variables except that once they are defined they cannot be changed or undefined.
//A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
//
//A valid constant name starts with a letter or underscore (no $ sign before the constant name).
//
//Note: Unlike variables, constants are automatically global across the entire script.
//To create a constant, use the define() function.
//Syntax: define(name, value, case-insensitive)
//Parameters:
//name: Specifies the name of the constant.
//value: Specifies the value of the constant.
//case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false as bellow:

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>";

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

//Here we can see how we change the variable value of $car and the last value which was printed.
echo "<br>";
define ("company", "GMC");
$car = "Nissan";
echo "You prefer a car from " .company. " or from " .$car. "?";

//The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions.
//echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
//With echo and print the text can contain HTML markup.
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";


$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$name = "Norah";
echo "<h2>" . $txt1 . "</h2>";
echo "<b>I like studying PHP at " . $txt2 . "<br>";
echo 'My name is: ' ."<b>$name</b>";

/*
The examples of thing need an escape:
\n => New line or line feed
\r => Carriage Return
\r\n => There no difference between \n, \r and \r\n .. all of them give a new line.
\t => Tap
\"
\$
\\
*/
echo "<pre>";
echo "Hi \"My Future\" , I'm I know you hide \$1000 000 000 000 and a lot of happiness for me.\r\nBut not just that, You will make me ...\tvery powerful!!";
echo "<br>";
//Here we notice that ' need escape if we use single quotation but in double quotation we didn't need it.
echo 'Since now I will change my life and I\'m damn able to do it for sure!';
echo "<pre>";
echo "<br>";

$string = "Welcome to my world";

//Count the letters
echo strlen($string);
echo "<br>";

//count the words
echo str_word_count($string);
echo "<br>";

//replace the words
echo str_replace('Welcome', 'Hello', $string);
echo "<br>";

//flip over the words
echo strrev($string);
echo "<br>";

//A class is a template for objects, and an object is an instance of class.
//Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.
//When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
//In a class, variables are called properties and functions are called methods!
//$this keyword refers to the current object, and is only available inside methods.

class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }
    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$banana->set_name('Banana');

echo $apple->get_name(), ", Color: " . $apple->get_color(). ".";
echo "<br>";
echo $banana->get_name();
echo "<br>";

class Car
{
    public $model = 'BMW';
    public $color = 'Blue';

    function description()
    {
        return 'The car is: ' . $this->model. ", " .$this->color;
    }
}

$car = new Car;
echo $car->description();
echo "<br>";

class Student
{
    function Student()
    {
        $this->name = 'Huda';
        $this->gba = '4.5';
    }
}
$name = new Student();
echo "Student Name: " .$name->name. " and the GBA is: " .$name->gba;
echo "<br>";


//The if statement executes some code if one condition is true.
date_default_timezone_set('Asia/Riyadh');
$timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone;
echo "<br>";
echo "The time currently is: " . date("h:i:sa");
echo "<br>";


//The if statement executes some code if one condition is true
$t = date("h:i:sa");

if ($t < "17") {
    echo "Have a good day!";
}
echo "<br>";


//The if...else statement executes some code if a condition is true and another code if that condition is false.
$t = date("H");

if ($t < "17") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";


//The if...elseif...else statement executes different codes for more than two conditions.
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "17") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";

//Ternary operator .. Syntax: (Condition) ? (Statement1) : (Statement2);
$score = 10;
$age = 20;
echo 'Taking into account your age and score, you are: ',($age > 10 ? ($score < 80 ? 'behind' : 'above average') : ($score < 50 ? 'behind' : 'above average'));


?>





</body>
</html>
