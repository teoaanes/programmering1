<?php
?>


<html>
    <h1>Fjern poststed</h1>
    <script src="javascript.js"> </script>
    <form method="post" action="" onSubmit="return bekreft()">
        <label for="postnr">Postnummer:</label>
        <input type="text" name="postnr" id="postnr" required><br>
        <input type="submit" name="postKnapp" value="Fjern">
    </form>
</html>

<?php

include('db-tilkobling.php');

if (isset($_POST["postKnapp"])){
    $postnr=$_POST["postnr"];
    
    if(!$postnr){
        echo("Postnummer må fylles ut");
    }
    else{
        $sqlSetning="SELECT * FROM poststed WHERE postnr='$postnr';";
        $sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente å hente info fra database");
        $antallRader=mysqli_num_rows($sqlResultat);

        if ($antallRader==0){
            echo("Poststedet finnes ikke");
        }
        else{
            $sqlSetning="DELETE FROM poststed WHERE postnr='$postnr';";
            mysqli_query($db, $sqlSetning) or die ("Ikke mulig å gjøre endring i databasen");
            echo("Følgende poststed er nå slettet: $postnr");
        }
    }




}


?>