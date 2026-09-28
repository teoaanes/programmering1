<?php

$klasse=$_POST['klassekode'];
$status = true;

function validerkk($klasse,$status){
    
    if(!$klasse){
        $status = false;
        return "ingen emnekode er utfylt";
    }

    elseif(strlen($klasse) != 3){
        $status = false;
        return "klassekode må være 3 tegn";
    }
    else {
        $del1 = substr($klasse, 0, 2);
        $del2 = substr($klasse, 2, 1);

        if(!ctype_alpha($del1)){
            $status = false;
            return "Klassekode må starte med bokstaver" . "<br>";

        }

        if(!ctype_digit($del2)){
            $status = false;
            return "Klassekode må slutte med tall";
        }
    }

    if ($status == true){
        return "klassekode er gyldig";
    }
}

echo validerkk($klasse,$status);

?>