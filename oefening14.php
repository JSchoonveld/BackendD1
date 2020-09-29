<?php
$min = $_GET['min'] ?? 0;
$max = $_GET['max'] ?? 0;
$deler = $_GET['del'] ?? 0;
$aantal = 0;

$geldig = false;

if ($deler != 0 && $min < $max){
    $geldig = true;
    if ($geldig === true) {
        $getallen = [];

        for ($i = $min; $i <= $max; $i++) {
            if ($i % $deler == 0) {
                array_push($getallen, $i);
            }
        }
        $aantal = implode('', $getallen);
        echo 'De volgende '.  count($getallen) . ' getallen tussen ' . $min . ' en '. $max . ' zijn deelbaar door ' . $deler . ': ';

        for ($i = 0; $i < count($getallen); $i ++){
            echo '<b>' . $getallen[$i] . ',</b>';
        }
    }
}
elseif ($deler == 0 && $min < $max)
    echo 'Er zijn geen getallen tussen ' . $min . ' en '. $max . ' die deelbaar zijn door ' . $deler . '.'
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
<?php

?>



</body>
</html>
