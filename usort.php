<?php ## пользовательская сортировка списков
$tools = ["one", "two", "three", "four"];
usort($tools, function($a,$b){return strcmp($a, $b); });
print_r($tools);
?>