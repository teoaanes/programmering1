<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="eksempel-4\style.css">
    </head>

<body>

<?php

$svar = $_POST["svar"];

if ($svar == "!svar") {
    echo"Du har ikke svart";
}
else if ($svar == "Ja") {
    echo "Du har svart ja";
}

else if ($svar == "Nei") {
    echo "Du har svart nei";
}

else if ($svar == "!Ja or !Nei") {
    echo "Du har ikke svart ja eller nei";
}

?>


</body>