<?php

$postnr=$_POST['postnr'];

function validerPostnr($postnr){
    if(!$postnr){
        return "Postnummer er ikke fylt ut";
    }

    elseif(strlen($postnr) !=4){
        return "Postnummer må være 4 siffer";
    }

    elseif(!ctype_digit($postnr)){
        return "Postnummer må være tall";
    }

    else{
        return "Postnummer er gyldig";
    }
}

echo validerPostnr($postnr);

?>