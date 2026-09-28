<?php

$postnr=$_POST['postnr'];

function validerPostnr($postnr){
    if(!$postnr){
        return "Postnummer er ikke fylt ut";
    }
    
    elseif(!ctype_digit($postnr)){
        return "Postnummer må være tall";
    }
    
    elseif(strlen($postnr) !=4){
        return "Postnummer må være 4 siffer";
    }

    else{
        return "Postnummer er gyldig";
    }
}

echo validerPostnr($postnr);

?>