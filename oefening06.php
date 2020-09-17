<?php

$lengte = 5;
$breedte = 7;
$hoogte =2;
$verfPrijs = 2;

$oppervlakte = $lengte * $breedte * $hoogte;
$kosten = $oppervlakte * $verfPrijs;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 1</title>

    <link rel="stylesheet" href="myStyle.css">
</head>
<body>

<p>Dit is oefening nummer 6</p>

<p>De totale oppervlakte van de muren is <?php echo $oppervlakte ?> vierkante meter <br>
De verf kost<?php echo $verfPrijs ?> euro per vierkante meter <br>
De totale kosten zijn <?php echo $kosten ?> euro</p>

</body>
</html>