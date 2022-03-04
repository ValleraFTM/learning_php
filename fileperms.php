<?php 
require_once "counter.php";
    // получаем права доступа и тип файла
    $perms = fileperms("file.csv");
    // преобразуем результат в восьмеричную систему счисления
    echo decoct($perms)."<br />";
    // преобразуем результат в двоичную систему счисления
    echo decbin($perms). "<br />";
?>