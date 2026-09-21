<?php

$tall = 1;
$matte = 0;

for ($tall = 1; $tall <= 10; $tall++) {
    $matte += $tall;
}
 echo $matte . "<br>" . "gjennomsnittet av tallene 1-10 er: " . $matte/$tall;

?>