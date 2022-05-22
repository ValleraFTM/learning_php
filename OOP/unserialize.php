<?php ## восстановление объекта из строки
    // подключаем определение класса cls
    require_once("cls.php");

    // извлекаем сериализованный объект из файла
    $fd = fopen("text.obj", 'r');
    if (!$fd) exit("невозможно открыть файл");
    $text = fread($fd, filesize("text.obj"));
    fclose($fd);

    // восстановливаем сериализованный объект
    $obj = unserialize($text);

    // выводим дамп объекта
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
?>