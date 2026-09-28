<?php

$klasse=$_POST['klassekode'];
$status = true;

if(!$klasse){
    $status = false;
    echo "ingen emnekode er utfylt";
}

elseif(strlen($klasse) != 3){
    $status = false;
    echo "klassekode må være 3 tegn";
}
else {
    $del1 = substr($klasse, 0, 2);
    $del2 = substr($klasse, 2, 1);

    if(!ctype_alpha($del1)){
        $status = false;
        echo "Klassekode må starte med bokstaver" . "<br>";

    }

    if(!ctype_digit($del2)){
        $status = false;
        echo "Klassekode må slutte med tall";
    }
}

if ($status == true){
    echo "klassekode er gyldig";
}

?>