<?php
    // получает в параметры строку и возвращает пробел коды
    // символов, из которых она состоит
    function makeHex(string $st) : string 
    {
        for ($i = 0; $i < strlen($st); $i++) {
            $hex[] = sprintf("%02X", ord($st[$i]));
        }
        return join(' ', $hex);
    }

    // открываем фаил скрипта разными способами
    $f = fopen(__FILE__, "rb"); // бинарный режим
    echo makeHex(fgets($f, 100)), "<br />\n";
    $f = fopen(__FILE__, "rt"); // текстовый режим
    echo makeHex(fgets($f,100)), "<br />\n";
    ?>