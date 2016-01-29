<?php
#1.1

$yr = 2316; 
$visYr = ($yr % 4 == 0 ? true : ($yr % 400 == 0 ? true : ($yr % 100 == 0 ? true : false)));
var_dump($visYr);

#1.2

$time = date('i') % 5;
$color = ($time < 3 ? "green" : "red");
echo $color;

#1.3

$a = [2, 7];
$b = [6, 1];
$c = [12, 5];

$ab = (pow(($b[0] - $a[0]), 2) + (pow(($b[1] - $a[1]), 2)));
$ac = (pow(($c[0] - $a[0]), 2) + (pow(($c[1] - $a[1]), 2)));
$bc = (pow(($c[0] - $b[0]), 2) + (pow(($c[1] - $b[1]), 2)));

$first = 0;
$second = 0;
$third = 0;

if ($ab > $ac && $ab > $bc) {
    $first = $ab;
    $second = $ac;
    $third = $bc;
} else if ($ac > $bc && $ac > $ab) {
    $first = $ac;
    $second = $ab;
    $third = $bc;
} else if ($bc > $ac && $bc > $ab) {
    $first = $bc;
    $second = $ab;
    $third = $ac;
}

$res = ($first == $second + $third) ? true : false;
var_dump($res);