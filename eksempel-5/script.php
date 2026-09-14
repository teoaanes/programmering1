<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="eksempel-5\style.css">
    <title>Eksempel 5</title>
</head>

<?php

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];

if ($tall3 == "1"){
    $sum = $tall1+$tall2;
    echo "$tall1 + $tall2 = $sum";
}

else if ($tall3 == "2"){
    $sum = $tall1-$tall2;
    echo "$tall1 - $tall2 = $sum";
}

else if ($tall3 == "3"){
    $sum = $tall1*$tall2;
    echo "$tall1 * $tall2 = $sum";
}

else if ($tall3 == "4"){
    $sum = $tall1/$tall2;
    echo "$tall1 / $tall2 = $sum";
}
else {
    echo"Operasjonen er ugyldig";
}

    echo "<button type='button' id='tilbake' onclick='window.location.href=\"index.html\"'>Tilbake til Index</button>";
    echo "<button type='button' id='tilbake' onclick='window.location.href=\"eksempel-5/eksempel-5.html\"'>Tilbake</button>";
?>