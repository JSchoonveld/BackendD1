<?php

$nameFilter = $_GET['nl'] ?? false;
$names = ['Bart', 'Jesse', 'Mert', 'Bo', 'Sanne', 'Piet', 'Laurie', 'Pascal', 'Ad', 'Adi', 'Marianne'];
$nameLength = [
    0 => 0,
    1 => 0,
    2 => 0,
    3 => 0,
    4 => 0,
    5 => 0,
    6 => 0,
    7 => 0,
    8 => 0,

];
//Zet de array in alfabetische volgorde.
sort($names);

function howMuchNames($names, $nameLength)
{
    foreach ($names as $value) {
        if (strlen($value) == 1) {
            $nameLength[1] += 1;
        }
    }
    foreach ($names as $value) {
        foreach ($nameLength as $value2 => $key)
            if (strlen($value) == $value2) {
                $nameLength[$value2] += 1;
            }
    }

    foreach ($nameLength as $value => $key) {
        echo 'Naamlengte is ' . $value . ', Komt ' . '<a href="oefening12.php?nl=' . $value . ' ">' . $key . '</a>' . ' keer voor<br>';
    }
}

function nameChecker($names, $filter)
{
    $checker = false;
    if ($filter !== false) {
        for ($i = 0; $i < count($names); $i++) {
            if (strlen($names[$i]) == $filter) {
                echo $names[$i] . '<br>';
                $checker = true;
            }
        }
    }
    if ($filter !== false && $checker === false) {
        echo 'There is no name of this length <br>';
    } elseif ($filter === false) {
        echo 'You forgot to set a name length in the querystring<br><br>';

        foreach ($names as $value) {
            echo $value . '<br>';
        }
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>
    <?php
    nameChecker($names, $nameFilter);
    echo '<br>';
    echo '<h3>Set a namelength by clicking on one of the numbers below</h3>';
    howMuchNames($names, $nameLength);
    ?>
    <br>
    <a href="oefening12.php">Back to the start</a>
</>
</body>
</html>

