<?php

$lengte = $_GET['l'];
$breedte = $_GET['b'];
$hoogte = $_GET['h'];
$verfprijs = $_GET['v'];
$oppervlakte = (($lengte * $hoogte) * 2) + ($breedte * $hoogte) *2;
$kosten = $oppervlakte * $verfprijs;

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

<p><?php if ($lengte > 0 && $breedte > 0 && $hoogte > 0 && $verfprijs > 0) {
        echo 'Oppervlakte muren: ' . $oppervlakte . ' vierkante meter.';
        echo '<br>Kosten: ' . $kosten . ' euro';
    } else {
        echo "Een van de parameters is een nul of lager";
    } ?>
    <br>Prijs van de verf: <?php echo $verfprijs ?> euro per vierkante meter <br>

</p>
</body>
</html>
