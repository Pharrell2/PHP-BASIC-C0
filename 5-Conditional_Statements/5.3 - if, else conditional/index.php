<?php
$test1 = 3;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk" . "<br>";
}
else {
    echo "niet gelijk" . "<br>";
}

if($test1 <> $test2) {
    echo " ongelijk" . "<br>";
}
else {
    echo "  niet ongelijk" . "<br>";
}

if($test1 === $test2) {
    echo " niet identiek" . "<br>";
}
else {
    echo "  wel identiek" . "<br>";
}

if($test1 > $test2) {
    echo " is groter" . "<br>";
}
else {
    echo  "  is niet groter" . "<br>";
}

if($test1 < $test2) {
    echo " veel kleiner" . "<br>";
}
else {
    echo "  niet kleiner" . "<br>";
}

if($test1 >= $test2) {
    echo " gelijk aan" . "<br>";
}
else {
    echo "  groter" . "<br>";
}

if($test1 <= $test2) {
    echo " kleiner" . "<br>";
}
else {
    echo "  gelijk aan" . "<br>";
}
?>