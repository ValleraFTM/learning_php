<?php ## восстановление объекта
    // подключаем реализацию классах
    require_once("user.php");

    // Сериализованный объект
    $object = 'O:4:"user":3:{s:4:"name";s:4:"nick";s:8:"referrer";s:23:"/OOP/user_serialize.php";s:4:"time";i:1653242575;}';

    // восстановливаем объект
    $obj = unserialize($object);

    // выводим дамп объекта
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
?>