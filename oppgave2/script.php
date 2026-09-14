<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="oppgave2/style.css">
</head>
<?php

$number = $_POST["matte"];

if ($number == 9) {
    echo "Korrekt, svaret er 9";
    echo "<button type='button' id='tilbake' onclick='window.location.href=\"index.html\"'>Tilbake til Index</button>";
    echo "<button type='button' id='tilbake' onclick='window.location.href=\oppgave2\"oppgave2.html'>Tilbake</button>";
     }

else {
    echo"Feil svar, " . $number . " er ikke riktig";
    echo "<button type='button' id='tilbake' onclick='window.location.href=\"index.html\"'>Tilbake til Index</button>";
    echo "<button type='button' id='tilbake' onclick='window.location.href=\oppgave2\"oppgave2.html'>Tilbake</button>";
}
?>