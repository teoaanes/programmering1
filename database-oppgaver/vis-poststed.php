<?php   

include 'db-tilkobling.php';

$sqlSetning="SELECT * FROM poststed;";

$sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat);

print("<h3>Poststeder</h3>");
print("<table border=1>");
print("<tr><th>Postnummer</th><th>Poststed</th></tr>");

for ($r=1;$r<=$antallRader;$r++)
{
    $rad=mysqli_fetch_array($sqlResultat);
    $poststed=$rad["poststnr"];
    $postnummer=$rad["poststed"];
    print("<tr><td>$poststed</td><td>$postnummer</td></tr>");
}

print("</table>");

?>