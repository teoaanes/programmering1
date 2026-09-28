<?php

$klasse=$_POST['klassekode'];
$status = true;

function validerkk($klasse,$status){
    $feil=[];
    
    if(!$klasse){
        $status = false;
        $feil[] = "ingen emnekode er utfylt";
    }

    elseif(strlen($klasse) != 3){
        $status = false;
        $feil[] = "klassekode må være 3 tegn";
    }
    else {
        $del1 = substr($klasse, 0, 2);
        $del2 = substr($klasse, 2, 1);

        if(!ctype_alpha($del1)){
            $status = false;
            $feil[] = "Klassekode må starte med bokstaver" . "<br>";

        }

        if(!ctype_digit($del2)){
            $status = false;
            $feil[] = "Klassekode må slutte med tall";
        }
    }

    if (empty($feil)){
        return "klassekode er gyldig";
    }
    else {
        return implode("<br>", $feil);
    }
}

echo validerkk($klasse,$status);

?>