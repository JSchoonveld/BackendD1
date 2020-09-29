<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 7</title>

    <link rel="stylesheet" href="myStyle.css">
</head>
<body>

<p>Dit is oefening nummer 7</p>

<?php

$getal = $_GET['g'] ?? 0;
$aantal = $_GET['a'] ?? 10;

for($i = 1; $i <= $aantal; $i++){
    $result = $getal * $i;
    echo "$i x $getal = $result <br>";
}
?>

</body>
</html>
