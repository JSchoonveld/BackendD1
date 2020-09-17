<?php

$grades = [5,8,7,2,9,6,9];
$sortedGrades = rsort($grades);

$test = implode('', $grades);

$cijferlijst = [];
$highNr = 0;
$lowNr = 10;

$counter = 0;
foreach ($grades as $value){

  if ($counter < count($grades)){
      $counter += 1;
      array_push($cijferlijst, $value);
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 11</title>

    <link rel="stylesheet" href="myStyle.css">
</head>
<body>

<?php

echo "De cijferlijst is: " . implode(" ", $cijferlijst);
echo "<br>Het aantal cijfers is: " . count($cijferlijst);
echo "<br>Het hoogste cijfer is: $highNr";
echo "<br>Het laagste cijfer is: $lowNr";
echo "<br>Het gemiddelde cijfer is een: " . floor(array_sum($cijferlijst)/count($cijferlijst)*100)/100;

?>

</body>
</html>
