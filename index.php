<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
<form action="" method="POST">
    <input type="number" name="number1" placeholder="From"><br>
    <input type="number" name="number2" placeholder="To"><br>
    <select>
        <option>Even</option>
        <option>Odd</option>
    </select>
    <button>Show</button>
    <!-- <button type="submit" name="operator" value="+">+</button>
    <button type="submit" name="operator" value="-">-</button> -->
</form>


<?php

include 'vendor/autoload.php';
use Pondit\calculator\Calculator;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // print_r($_POST);
    // echo $_POST['number1'] + $_POST['number2'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $calculator = new Calculator($number1, $number2);
    echo $calculator->add();
    //  $calculator->number1;
}
?>

</body>
</html>