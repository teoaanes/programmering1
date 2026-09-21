<?php

$tall = $_POST['tall'];
$tall = explode(',', $tall);

for ($i = 0; $i < count($tall); $i++) {
    echo $tall[$i] . "<br>";
}

?>