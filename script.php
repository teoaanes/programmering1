<?php
$fornavn = $_POST["fornavn"];
$etternavn = $_POST["etternavn"];

    echo "God dag " . $fornavn . " " . $etternavn . "!" . "<br>" . "<button type='button' onclick='window.location.href=\"index.html\"'>Tilbake</button>";
?>