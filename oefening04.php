<?php

$getal1 = 25;
$getal2 = 5;

$quotient = 0;
$test = 0;

if($getal2 == 0){
    $getal2 = 'je kan niet door 0 delen';

}
else{
    $quotient = $getal1 / $getal2;
}

$som = $getal1 + $getal2;
$verschil = $getal1 - $getal2;
$product = $getal1 * $getal2;

$rest = $getal1 % $getal2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 4</title>

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
    rest = <?php echo $rest; ?>
</p>


</body>
</html>
