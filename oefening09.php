<?php

//variabel waarmee je het aantal worpen kan aanpassen via de querystring.
$throws = $_GET['t'];
//Lege array om de worpen in op te slaan.
$result = [];

//For loop die de resultaten van de worpen in de array $result stopt en de individuele worpen op de pagina weergeeft
for($i = 1; $i <= $throws; $i++) {
    $num = rand(1, 6);
    array_push($result, $num);
    echo "Worp $i = $num <br>";
}
//variabel die de som van alle getallen in het array neemt.
$total = array_sum($result);
echo "Het totaal van alle worpen = $total <br>";

echo "The amount of throws is $throws";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 9</title>

    <link rel="stylesheet" href="myStyle.css">
</head>
<body>





</body>
</html>