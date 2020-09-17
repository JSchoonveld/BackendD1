<?php

$getal1 = $_GET['g1'];
$getal2 = $_GET['g2'];

$som = $getal1 + $getal2;
$verschil = $getal1 - $getal2;
$product = $getal1 * $getal2;

if ($getal2 == 0){
    $quotient = '"je mag niet door 0 delen" wanneer $getal2 gelijk is aan 0.';
    $rest = '"getal 2 is 0.';
}
else {
    $quotient = $getal1 / $getal2;
    $rest = $getal1 % $getal2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 5</title>

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