<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja prvá stránka v PHP</title>
</head>
<body>
<h1>Vitajte na mojej prvej stránke v PHP!</h1>

<?php
// Definícia funkcie
function zobrazInfo() {
    echo "<h2>Henlo world</h2>";
    echo "Dnes je <strong>" . date("d.m.Y") . "</strong><br>";
    echo "Aktuálny čas je <strong>" . date("H:i:s") . "</strong><br>";
}

// Zavolanie funkcie
zobrazInfo();
?>

</body>
</html>