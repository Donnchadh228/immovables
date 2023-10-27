<?php
session_start();
require_once 'connect.php';

// $getRegion = mysqli_fetch_assoc(mysqli_query(
//     $connect,
//     "SELECT * FROM `region`"
// ));
$getRegion =  mysqli_fetch_all(mysqli_query(
    $connect,
    "SELECT * FROM `region`"
), MYSQLI_ASSOC);
