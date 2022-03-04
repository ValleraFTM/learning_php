<?php ## выделение уникальных слов в тексте
// эта функция выделяет из текста в $text все уникальные слова и 
// возвращает их список. в необязательный параметр $nOrigWords
// помещается исходное число слов в тексте, которое было до 
// "фильтрации" дубликатов.
    function getUniques($text, &$nOrigWords = false) 
    {
        // сначала получаем все слова в тексте
        $words = preg_split("/([^[:alnum:]]|['-])+/s", $text);
        $nOrigWords = count($words);
        // заем приводим слова к нижнему регистру
        $words = array_map("strtolower", $words);
        // получаем уникальные значения
        $words = array_unique($words);
        return $words;
    }

    //пример применения функции
    setlocale(LC_ALL, 'ru_RU.UTF-8');
    $fname = "largetextfile.txt";
    $text = file_get_contents($fname);
    $uniq = getUniques($text, $nOrig);
    echo "было слов: $nOrig<br />";
    echo "Стало слов: ".count($uniq)."<br />";
    echo join(" ", $uniq);
?>
