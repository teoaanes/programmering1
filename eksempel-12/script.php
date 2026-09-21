<?php

$tall = 1;
$matte = 0;
$antall = 10;

for ($tall = 1; $tall <= 10; $tall++) {
    $matte += $tall;
}
 echo $matte . "<br>" . "gjennomsnittet av tallene 1-10 er: " . $matte/$antall;

?>