<?php ## вызов метода объекта
    require_once "Math/Complex1.php";
    // Создаём первый объекта
    $a = new MathComplex1;
    $a->re = 314;
    $a->im = 101;
    // Сщздаем второй объект
    $b = new MathComplex1;
    $b->re = 303;
    $b->im = 6;
    // Добавляем одно значение к другому
    $a->add($b);
    // Выводим результат
    echo $a->__toString();
    ?>