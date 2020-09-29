<?php

$getallen = [];
for($i = 1; $i < 101; $i++){
    array_push($getallen, $i);
}

$del2 = 0;
$del3 = 0;
$del5 = 0;
$del7 = 0;
foreach ($getallen as $key => $value){
    if($value % 2 == 0){
        $key = 1;
    }
    elseif ($value % 3 == 0){
        $del3 ++;
    }
    elseif ($value % 5 == 0){
        $del5 ++;
    }
    elseif ($value % 7 == 0){
        $del7 ++;
    }
}

$valueArr = [];

for ($i=0;$i < 100; $i++){
    if ($i % 2 == 0){
        array_push($valueArr, $i);
    }
    if ($i % 3 == 0){
        array_push($valueArr, $i);
    }
    if ($i % 5 == 0){
        array_push($valueArr, $i);
    }
    if ($i % 7 == 0){
        array_push($valueArr, $i);
    }
}

$counter = 1;
function tableMaker($rowl, $coll, $counter)
{
    for ($row = 0; $row < $rowl; $row++){
        echo '<tr>';
        for ($col=1; $col <= $coll; $col++) {

                echo "<th style=\"background-color: yellow\">$counter</th> \n";
                $counter += 1;

        }
        echo '</tr>';
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
    <link rel="stylesheet" href="myStyle.css">
    <title>Document</title>
</head>
<body>

<table>
    <?php
        tableMaker(10, 10, $counter);
    ?>

</table>


</body>
</html>
