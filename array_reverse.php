<?php # переворачиваем массив
$A = [
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "processor"
];
echo "<pre>";
asort($A);
print_r($A);
echo "<hr>";
$A = array_reverse($A);
print_r($A);
echo "</pre>";
?>