<!DOCTYPE html>
<html lang="ru">
<head>
    <title> Вывод параметров командной строки</title>
    <meta charset='utf-8'>
</head>
<body>
<pre>
<?php
echo "<h1>hello world </h1>";
$dat = date("d.m y");
$tm = date("h:i:s");
echo "current date: $dat";
echo "<br>";
echo "current time: $tm";
echo "<hr>";
echo "данные из командной строки:". $_SERVER['QUERY_STRING'];



?>
</pre>
</body>
</html>
