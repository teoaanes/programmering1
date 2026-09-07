<!DOCTYPE html>
<html lang="no">
<head>
    <link rel="stylesheet" href="eksempel-1/style.css">
</head>

<body>

<?php
$fornavn = $_POST["fornavn"];
$etternavn = $_POST["etternavn"];
$alder = $_POST["alder"];

echo "God dag " . $fornavn . " " . $etternavn . "!";
echo "<br>";
echo "Du er " . $alder . " år gammel.";
echo "<br>";
echo "<button type='button' id='tilbake' onclick='window.location.href=\"index.html\"'>Tilbake</button>";
?>

</body>
</html>