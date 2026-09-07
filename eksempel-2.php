<?php
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];

    echo "Tallene dine er " . $number1 . " og " . $number2 . "<br>";
    echo "Summen av " . $number1 . " og " . $number2 . " er " . ($number1 + $number2) . "<br>";
    echo "Differansen mellom " . $number1 . " og " . $number2 . " er " . ($number1 - $number2) . "<br>";
    echo "Produktet av " . $number1 . " og " . $number2 . " er " . ($number1 * $number2) . "<br>";
    echo "Kvotienten av " . $number1 . " og " . $number2 . " er " . ($number1 / $number2) . "<br>";
    echo "<button type='button' onclick='window.location.href=\"index.html\"'>Tilbake</button>";
?>