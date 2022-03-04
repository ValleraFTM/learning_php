<?php ## различные флаги preg_match_all()
    header('Content-Type: text/plain');
    $flags = [
        'PREG_PATTERN_ORDER',
        "PREG_SET_ORDER",
        "PREG_SET_ORDER | PREG_OFFSET_CAPTURE",
    ];
    $re = '|<(\w+).*?>(.*?)</\1>|s';
    $text = "<b>текст</b> и еще <i>другой текст</i>"; 
    echo " Строка: " . $text."\n";
    echo "Выражение: $re\n\n";
    foreach ($flags as $flag) {
        preg_match_all($re, $text, $matches, eval("return $flag;"));
        echo "Флаг $flag:\n";
        print_r($matches);
        echo "\n";
        }
?>