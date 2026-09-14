<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="eksempel-4\style.css">
    </head>

<body>

<?php

$svar = $_POST["svar"];
$alder = $_POST["alder"];


if (!$svar or !$alder) { 
    echo "Du mangler svar for ";
    if (!$svar) {
        echo "om du er student";
    }
    if (!$svar && !$alder) {
        echo " og ";
    }
    if (!$alder) {
        echo "alder";
    }
}

else if ($svar == "Ja" && $alder < 18) {
    echo "Du har svart ja, og at du er under 18 (OK Young Sheldon ahh)";
}
else if ($svar == "Ja" && $alder) {
    echo "Du har svart ja og at du er $alder";
}

else if ($svar == "Nei" && $alder) {
    echo "Du har svart nei og at du er $alder";
}



else {
    echo "Du har ikke svart ja eller nei";
}

?>


</body>