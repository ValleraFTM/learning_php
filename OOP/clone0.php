<?php ## встроенное клонирование объектов
require_once "Math/Complex2.php";
$a = new MathComplex2(303, 6);
$x = new MathComplex2(0, 0);
// создаем копию объекта $x
#$y = clone $x;
$y = $x;
// теперь $x и $y полностью различны
$y->add($a);
// при этом $x не изменяется.
echo "x=", $x, ", y=", $y;
?>