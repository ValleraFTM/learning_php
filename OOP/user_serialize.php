<?php ## подключаем сериализацию класса
    require_once("user.php");

    // создаём объект
    $obj = new user("nick", "qwerty");

    // выводим дамп объекта
    echo "<pre>";
    print_r($obj);
    echo "</pre>";

    // сериализуем объект
    $object = serialize($obj);

    // выводим сериализованный объект
    echo "$object";
    ?>