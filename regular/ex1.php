<?php ## пример первый
// проверить, что в строке есть число(одна цифра или более)
preg_match('/(\d+)/s', "article_123.html", $matches);
// совпадение(подвыражение в скобках) окажется в $matches[1] 
echo $matches[1];
?>