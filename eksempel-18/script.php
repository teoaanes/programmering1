<?php

$emne=$_POST['emnekode'];
$valid = true;



if (!$emne){
    $valid = false;
    echo "Emnekode er ikke fylt ut" . "<br>";
}
elseif (strlen($emne) != 7){
    $valid = false;
    echo "Emnekode må være 7 tegn" . "<br>";
}

else {
    $del1 = substr($emne,0,3);
    $del2 = substr($emne,3,3);
    $del3 = substr($emne,6,1);

    if (!ctype_alpha($del1)){
        $valid = false;
        echo "Emnekode må starte med bokstaver" . "<br>";
    }
    if (!ctype_digit($del2)){
        $valid = false;
        echo "Emnekode må ha tall i midten" . "<br>";
    }
    if (!ctype_alpha($del3) && !ctype_digit($del3)){
        $valid = false;
        echo "Emnekode må slutte med bokstaver eller sifre" . "<br>";
    }
}

if ($valid){
    echo "Emnekode er gyldig";
}

?>