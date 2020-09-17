<?php

$getal1 = 3;
$getal2 = 8;

$som = $getal1 + $getal2;
$verschil = $getal1 - $getal2;
$product = $getal1 * $getal2;
$quotient = $getal1 / $getal2;
$rest = $getal1 % $getal2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 2</title>

    <link rel="stylesheet" href="myStyle.css">
</head>
<body>

<P>
    getal 1 = <?php echo $getal1; ?> <br>
    getal 2 = <?php echo $getal2; ?> <br>

</P>

<p>
   som = <?php echo $som; ?> <br>
   verschil = <?php echo $verschil; ?> <br>
   product = <?php echo $product; ?> <br>
   quotient = <?php echo $quotient; ?> <br>
   rest =  <?php echo $rest; ?>
</p>


</body>
</html>