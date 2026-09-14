<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="eksempel-6\style.css">
    <title>Eksempel 6</title>
    <meta charset="UTF-8">
</head>

<?php

$tall1 =$_POST["tall1"];
$tall2 =$_POST["tall2"];
$tall3 =$_POST["tall3"];

echo"Dine tall er: <br> Tall 1:$tall1 <br> Tall 2: $tall2 <br> Tall 3:$tall3 <br><br>";

if($tall1==$tall2 && $tall1==$tall3 && $tall2==$tall3){
    echo"Tallene dine er like";
}

if ($tall1>$tall2) {
    echo "Tall 1 er større enn Tall 2<br>";
}   else {
    echo "Tall 1 er mindre enn Tall 2<br>";
}

if ($tall1>$tall3) {
    echo "Tall 1 er større enn Tall 3<br>";
} else {
    echo "Tall 1 er mindre enn Tall 3<br>";
}

if ($tall2>$tall3) {
    echo "Tall 2 er større enn Tall 3<br>";
} else {
    echo "Tall 2 er mindre enn Tall 3<br>";
}
?>