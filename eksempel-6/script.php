<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="eksempel-6\style.css">
    <title>Eksempel 6</title>
    <meta charset="UTF-8">
</head>

<?php

$tall1 =$_POST["tall1"];
$tall2 =$_POST["tall2"];

if($tall1==$tall2){
    echo "Tallene dine er like";
}

else if ($tall1<$tall2){
    echo"Dine tall er $tall1 og $tall2" . "<br>$tall1 er mindre enn $tall2";
}
else{
    echo"Dine tall er $tall1 og $tall2" . "<br>$tall1 er større enn $tall2";
}

?>