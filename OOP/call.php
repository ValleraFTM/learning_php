<?php ## вызов метода объекта
    // загрузка класса
    require_once "Math/Complex.php";
    // создаём объект класса MathComplex
    $obj = new MathComplex;
    // присваеваем начальное значение свойствам
    $obj->re = 16.7;
    $obj->im = 101;
    // Вызов метода add() с параметрами (18.09, 303) объекта $obj
    $obj->add(18.09, 303);
    // выыодим результат:
    echo "({$obj->re}, {$obj->im})";
?>