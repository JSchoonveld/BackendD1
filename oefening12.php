<?php

$nameFilter = $_GET['nl'];
$names = ['Bart', 'Jesse', 'Mert', 'Bo', 'Sanne', 'Piet', 'Laurie', 'Pascal', 'Ad', 'Adi'];
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

function howMuchNames($names, $nameLength){
foreach ($names as $value){
    if(strlen($value) == 1){
        $nameLength[1] += 1;
    }
}
foreach ($names as $value){
    foreach ($nameLength as $value2 => $key)
    if(strlen($value) == $value2){
        $nameLength[$value2] += 1;
    }
}

foreach ($nameLength as $value => $key) {
    echo 'Naamlengte is ' . $value . ', Komt ' . $key . ' keer voor<br>';
}
}

function nameChecker($names, $filter, $nameLength)
{
    $checker = 0;
    if(isset($filter)){
        for ($i = 0; $i < count($names); $i++){
            if(strlen($names[$i]) == $filter){
                echo $names[$i] . '<br>';
                $checker = 1;

            }
        }
        if($checker == 0){
            echo 'There are no names of this length';
        }
    }
    else{
        for ($i = 0; $i < count($names); $i++){
            echo $names[$i] . '<br>';
            $checker += 1;

        }
        die('<br>You forgot to set a namelength in the querystring');
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
    howMuchNames($names, $nameLength);
    ?>
    <br>
    <?php
        nameChecker($names, $nameFilter, $nameLength);
    ?>
    <br><a href="http://localhost/school/Backend/Blok1/Opdracht1/oefening12.php">Toon alle namen</a>
</>
</body>
</html>

