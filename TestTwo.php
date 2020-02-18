<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Test Two</title>
</head>

<body>
<!---->
<?php
//
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//
//echo $_GET['name'];
////http://localhost:8888/PHP-My%20Work/TestTwo.php?name=norah
//?>
<!---->
<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//
//isset($_GET['name']) ? $name = $_GET['name'] : $name = '';
//
//echo $name;
//print_r($_GET);
////http://localhost:8888/PHP-My%20Work/TestTwo.php?name=hala&age=23&city=dubai
//
//?>

<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//
//isset($_GET['name']) ? $name = $_GET['name'] : $name = '';
//
//foreach($_GET as $getValues){
//
//    echo "<div>$getValues</div>";
//}
////http://localhost:8888/PHP-My%20Work/TestTwo.php?name=hala&age=23&city=dubai
//?>

<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//
//isset($_GET['name']) ? $name = $_GET['name'] : $name = '';
//
//foreach($_GET as $key => $getValues){
//
//    echo "<div>$key : $getValues</div>";
//}
//
//name : hala
//age : 23
//city : dubai
//
//?>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (count($_GET)) {
    foreach ($_GET as $key => $getValues) {

        echo "<div>$key : $getValues</div>";
    }
}
//if I delete the name, the age and the city from this link http://localhost:8888/PHP-My%20Work/TestTwo.php?name=hala&age=23&city=dubai won't give me an error because we use count.

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

    <input type="text" name="name" placeholder="Name">
    <input type="number" name="age" placeholder="Age">
    <input type="text" name="city" placeholder="City">
    <button type="submit">Save</button>
</form>

</body>

</html>