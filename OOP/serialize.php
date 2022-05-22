<?php ## сериализация объекта $obj klassa cls
// подключаем определение класса cls
require_once("cls.php");

// создаем объект
$obj = new cls(100);

// сериализуем объект
$text = serialize($obj);

// сохраняем объект в файл
$fd = fopen("text.obj", "w");
if (!$fd) exit("невозможно открыть файл");
fwrite($fd, $text);
fclose($fd);
?>
