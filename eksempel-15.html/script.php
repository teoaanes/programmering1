<?php

$tall = $_POST['tall'];
$tall2 = explode(",", $tall);

for ($i = 0; $i < count($tall2); $i++) {
    echo $tall[$i] . "<br>";
}

?>