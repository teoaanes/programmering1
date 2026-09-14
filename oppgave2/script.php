<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="oppgave2/style.css">
</head>
<?php

$number = $_POST["matte"];

if ($number == 9) {
    echo "Korrekt, svaret er 9";
}

else {
    echo"Feil svar, " . $number . " er ikke riktig";
}
?>