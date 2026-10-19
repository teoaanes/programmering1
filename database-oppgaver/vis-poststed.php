<?php   

include 'db-tilkobling.php';

$sqlSetning="SELECT * FROM poststed;";

$sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat);

print("<h3>Poststeder</h3>");
print("<table border=1>");
print("<tr><th>Poststed</th><th>Postnummer</th></tr>");

while($rad=mysqli_fetch_assoc($sqlResultat)){
    print("<tr><td>".$rad['poststed']."</td><td>".$rad['postnummer']."</td></tr>");
}

print("</table>");

?>