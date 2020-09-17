<?php

//variabel waarmee je het aantal worpen kan aanpassen via de querystring.
$throws = $_GET['t'];
echo "Het aantal worpen: $throws <br><br>";
//Lege array om de worpen in op te slaan.
$result = [];

//For loop die de resultaten van de worpen in de array $result stopt en de individuele worpen op de pagina weergeeft
for ($i = 0; $i < $throws; $i++) {
    $num = rand(1, 6);
    array_push($result, $num);
    echo "Worp $i = $num <br>";
}

//variabel om het aantal zessen op te slaan
$sixes = 0;

//array naar string
$strArr = implode("", $result);

//check elk element van de string. (als ik dit met de array deed kreeg ik elke keer een "bad gateway 502"
for ($i = 0; $i < strlen($strArr); $i++) {
    if ($strArr[$i] == 6) {
        $sixes += 1;
    } else {
        continue;
    }
}

echo "<br> Het aantal zessen: $sixes"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 10</title>

    <link rel="stylesheet" href="myStyle.css">
</head>
<body>


</body>
</html>