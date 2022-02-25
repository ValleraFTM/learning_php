<?php

// функция checkFibo проверяет, является 
// ли число $num числом фибоначчи 
function  checkFibo(int $num) : bool
{
    $n1 = (5*($num**2)-4)**0.5;
    $n2 = (5*($num**2)+4)**0.5;
    
    if ((fmod($n1, 1)) == 0 or (fmod($n2, 1)) == 0) return true;    
    else return false; 
}

// функция прохождения по массиву
function countNum(array $arr) : int
{
    $summ =0;
    foreach($arr as $elem)
    {
        // проверка, является ли элемент массива подмассивом 
        // и рекурсивный вызов функции прохода по массиву
        if (is_array($elem)) $summ += countNum($elem);
        elseif (checkFibo($elem)) $summ += $elem;
    }
    return $summ;
}

$arr = [8, [13, 21]];
var_dump(countNum($arr));

?>