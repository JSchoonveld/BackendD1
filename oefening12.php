<?php

$nameFilter = $_GET['nl'];

$names = ['Bart','Jesse', 'Mert', 'Bo', 'Sanne','Piet','Laurie','Pascal','Ad','Adi'];


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
foreach ($names as $value){

    if(strlen($value) == $nameFilter){
        echo $value . '<br>';
    }

}
?>
</p>
</body>
</html>
