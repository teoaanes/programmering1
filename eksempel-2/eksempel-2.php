<!DOCTYPE html>
<html lang="no">
<head>
    <link rel="stylesheet" href="eksempel-2/style.css">
</head>

<body>



<?php
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];

    echo "Tallene dine er " . $number1 . " og " . $number2 . "<br>" . "<br>";
    echo "Summen av " . $number1 . " og " . $number2 . " er " . ($number1 + $number2) . "<br>";
    echo "Differansen mellom " . $number1 . " og " . $number2 . " er " . ($number1 - $number2) . "<br>";
    echo "Produktet av " . $number1 . " og " . $number2 . " er " . ($number1 * $number2) . "<br>";
    echo "Kvotienten av " . $number1 . " og " . $number2 . " er " . ($number1 / $number2) . "<br>";
    echo "<button type='button' id='tilbake' onclick='window.location.href=\"index.html\"'>Tilbake</button>";
?>

</body>
</html>