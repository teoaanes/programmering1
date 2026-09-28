<?php

$postnr=$_POST['postnr'];

if(!$postnr){
    echo "Postnummer er ikke fylt ut";
}

elseif($strlen($postnr) !== 4){
    echo "Postnummer må være 4 siffer";
}

elseif(!ctype_digit($postnr)){
    echo "Postnummer må være tall";
}

else{
    echo "Postnummer er gyldig";
}


?>