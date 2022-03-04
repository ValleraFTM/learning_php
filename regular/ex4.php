<?php ## простейший (??) разбор даты
$str = " 15:16.2000 "; // к примеру
$re = '{                
    ^\s*(               
        (\d+)           
            \s* [[:punct:]] \s* 
        (\d+) 
            \s* [[:punct:]] \s* 
        (\d+) 
    ) \s*$
    }xs';
// разбиваем строку на куски при помощи preg_match()
preg_match($re, $str, $matches) or die("Not a date: $str");
// Теперь разбираемся с карманами
echo "Дата без пробелов: '$matches[1]' <br />";
echo "день: $matches[2] <br />";
echo "месяц: $matches[3] <br />";
echo "Год: $matches[4] <br />";
?>              