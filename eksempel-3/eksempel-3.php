<!DOCTYPE html>
<head>
    <title>Eksempel 3</title>
    <link rel="stylesheet" href="eksempel-3/style.css">
</head>
<body>
    <h1>Hva er 3 ganger 3?</h1>
    <form action="" method="POST">
        <input type="number" required>
        <button type="submit" name="matte">Sjekk</button>
        <button type="submit" name="nullstill">Nullstill</button>
    </form>

<div><?php
if (isset($_POST["matte"])) {
    $number = $_POST["matte"];

    if ($number == 9) {
        echo "Korrekt, svaret er 9";
     }

    else {
        echo"Feil svar, " . $number . " er ikke riktig";
}
}
?>
</div>

</body>