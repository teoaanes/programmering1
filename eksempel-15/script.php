<?php

$tall = $_POST["tall1"] . "," .
        $_POST["tall2"] . "," .
        $_POST["tall3"] . "," .
        $_POST["tall4"] . "," .
        $_POST["tall5"];

$tall = explode(",", $tall);

echo "tallene i rekkefølgen du skrev: <br>";
foreach ($tall as $tallene) {
    echo $tallene . "<br>";
}

echo "<br><br>";
echo "Tallene i motsatt rekkefølge: <br>";

foreach (array_reverse($tall) as $nummer) {
    echo $nummer . "<br>";
}
?>