<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="oppgave2/style.css">
</head>
<?php

$number = $_POST["matte"];

if ($number == "!9") {
    echo"Feil, $number . er ikke riktig";
}

else {
    echo"Korrekt, svaret er 9";
}
?>