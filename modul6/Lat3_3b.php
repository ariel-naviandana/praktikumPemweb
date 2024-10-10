<?php
session_start();

function calculateFactorial($num) {
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * calculateFactorial($num - 1);
    }
}

$number;

if(isset($_POST["angka"])) {
    $number = $_POST["angka"];
}

$result = calculateFactorial($number);

$myArray = [$result, "Ariel Naviandana Putra", 235150701111010];

$_SESSION['sessionArray'] = $myArray;

header("location:Lat3_3c.php");
