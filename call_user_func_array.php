<?php 
//вывод всех параметров на отдельных строках
function myecho(...$str)
{
    foreach ($str as $v) {
        echo "$v<br />\n";
    }
}
//то же самое, но предваряет параметры указанным числом пробелов
function tabber($spaces, ...$planets)
{
    //подготавливаем аргументы для myecho()
    $new = [];
    foreach ($planets as $planet) {
        $new[] = str_repeat("&nbsp;", $spaces).$planet;
    }
    //вызываем myecho() с новыми параметрами
    call_user_func_array("myecho", $new);
  }
  tabber(10, "mercury", "venera", "eath", "mars");
?>
