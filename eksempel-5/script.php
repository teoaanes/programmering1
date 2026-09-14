<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="eksempel-5\style.css">
</head>

<?php

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];

if ($tall3 == "1"){
    $sum = $tall1+$tall2;
    echo"$tall 1 . + . $tall2 . = . $sum";
}
?>