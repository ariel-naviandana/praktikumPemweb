<?php

session_start();

if(isset($_SESSION["sessionArray"])){
    $sessionArray = $_SESSION['sessionArray'];

    foreach ($sessionArray as $value) {
        echo $value . '<br>';
    }
}

if(isset($_SESSION['sessionArray'])){
    unset($_SESSION['sessionArray']);
}