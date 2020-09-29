<?php

$my_dice = rand(1, 6);
$other_dice = rand(1, 6);

$result = '';

if ($my_dice > $other_dice) {
    $result = 'hoger';
} elseif ($my_dice < $other_dice) {
    $result = 'lager';
} else {
    $result = 'even';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 7</title>

    <link rel="stylesheet" href="myStyle.css">
</head>
<body>

<p>Dit is oefening nummer 9</p>

<p>Ik heb <?php echo $my_dice ?> gegooid. De ander heeft <?php echo $other_dice ?> gegooid.</p>
<p>Dus ik heb <?php echo $result ?> gegooid.</p>

</body>
</html>
