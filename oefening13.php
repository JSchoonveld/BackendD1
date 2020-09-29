<?php
$length = $_GET['l'];

function fibonacci($length){
    $a = 0;
    $fibArray = [1, 1];
    for($i = 0; $i < $length +1; $i++){
        $a = $fibArray[count($fibArray)-1] + $fibArray[count($fibArray)-2];
        array_push($fibArray, $a);
    }
    return  $fibArray;
}

function tableMaker($length){
    $sequence = fibonacci($length);
    echo '<tr> <th>key</th><th>tabel</th><th>deling</th></tr>';
    for($x = 0; $x < $length +1; $x++) {

        if($x == 0){
            echo '<tr><th>' . $x . '</th><th>' . $sequence[$x] . '</th><th>nvt</th></tr>';
        }else {
            echo '<tr><th>' . $x . '</th><th>' . $sequence[$x] . '</th><th>' . $sequence[$x] / $sequence[$x - 1] . '</th></tr>';
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
    <link rel="stylesheet" href="myStyle.css">
    <title>Document</title>
</head>
<body>
<table id="fiboTable">

    <?php
    tableMaker($length);
    ?>


</table>
</body>
<script rel="script" src="opdr13JS/app.js"></script>
</html>
