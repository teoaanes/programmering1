<?php

$tall = $_POST['tall'];
$tall2 = explode(",", $tall);

echo"Tallene i rekkefølgen de er skrevet inn i: <br>";
for ($i = 0; $i < count($tall2); $i++) {
    echo $tall2[$i] . "<br>";
}

?>