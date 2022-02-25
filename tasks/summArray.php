<?php

// проверка числа на соответствие задаче
function checkNum(int $num) : bool
{
    // наборы цифр, числа скоторыми необходимо исключить из суммирования
    $strArr = ['012', '123', '234', '345', '456', '567', '678', '789'];
    foreach($strArr as $strnum) {
        if (str_contains($strnum, $num)) return true;
    }
    return false;
}
// установка начальных значений
$summ =0;
$k = 10000;
//проход по массиву
for($i=1;$i<$k + 1; $i++) {
    if (!checkNum($i)) $summ += $i;
}
var_dump($summ);
?>