<?php ## использование конструктора
    require_once "Math/Complex2.php";
    $a = new MathComplex2(303, 6);
    $a->add (new MathComplex2(303, 6));
    echo $a;
?>