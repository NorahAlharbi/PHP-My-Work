<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Test Two</title>
</head>

<body>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (count($_POST)) {
    foreach ($_POST as $key => $postValues) {

        echo "<div>$key : $postValues</div>";
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <input type="text" name="name" placeholder="Name">
    <input type="number" name="age" placeholder="Age">
    <input type="text" name="city" placeholder="City">
    <button type="submit">Save</button>
</form>

</body>

</html>
