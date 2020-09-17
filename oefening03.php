<?php

$price = 100;
$discount = 25;

$payable = (1 - $discount / 100) * $price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 3</title>

    <link rel="stylesheet" href="myStyle.css">
</head>
<body>

<p>
    De prijs is <?php echo $price; ?> euro <br>
    De korting is <?php echo $discount; ?> procent <br>
    Te betalen <?php echo $payable; ?> euro
</p>
</body>
</html>
