<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$x=4;
$y=9;
$z=6;

$average=($x + $y + $z) / 3;
echo number_format($average, 2, ',', ' ');  //configura para 2 casas decimais

echo "<br>";


$weather = array("Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Wind");

echo "We've seen all kinds of weather this month. At the begining of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4];
?>
</body>
</html>
