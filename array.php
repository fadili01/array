<?php
// //  deel1
// $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
// $myArray[]='tram';
// echo $myArray[0];
// echo $myArray[1];
// echo $myArray[2];
// echo $myArray[3];
// echo $myArray[4];
// echo $myArray[5];
// echo $myArray[6];

// deel2
// $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein','tram'];
// echo count($myArray);

// deel3
// regel 2 Bar
// regel 5 4
// regel 8 toyota
// regel 9 3 
// regel 12 5
// regel 19 4

// deel4
$cijfersphp = [4.4, 4.5, 5.6, 6.6, 7.7, 7.6];
$gemiddeld = round(array_sum($cijfersphp) / count($cijfersphp),1);

echo "gemiddeld is ".$gemiddeld;
?>