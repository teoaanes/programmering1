<?php
$fornavn = $_POST["fornavn"];
$etternavn = $_POST["etternavn"];
$alder = $_POST["alder"];

    echo "God dag " . $fornavn . " " . $etternavn . "!" . "<br>" . "Du er " . $alder . " år gammel." . "<br>" . "<button type='button' onclick='window.location.href=\"index.html\"'>Tilbake</button>";
?>