<?php
?>

<html>
    <h1>Legg til poststed</h1>
    <form method="post" action="">
        <label for="postnr">Postnummer:</label>
        <input type="number" name="postnr" id="postnr" required><br>

        <label for="poststed">Poststed:</label>
        <input type="text" name="poststed" id="poststed" required><br>

        <input type="submit" name="postKnapp" value="Legg til">
    </form>
</html>

<?php
include 'db-tilkobling.php';

if (isset($_POST ["postKnapp"])){
    $postnr=$_POST["postnr"];
    $poststed=$_POST["poststed"];
    
    if(!$postnr || !$poststed){
        echo("Både postnummer og poststed må fylles ut");
    }

    elseif(strlen($postnr)==4){
        $sqlSetning="SELECT * FROM poststed WHERE postnr='$postnr';";
        $sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente info fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);
        
        if($antallRader!=0){
            echo("Poststedet er allerede registrert");
        }
        else{
            $sqlSetning="INSERT INTO poststed VALUES('$postnr', '$poststed');";
            mysqli_query($db, $sqlSetning) or die('Ikke mulig å registrere i databasen');

            echo("Følgende er nå registrert: $postnr $poststed");
        }

        }
    else{
    echo("Her har det skjedd noe rart");
    }

}

?>