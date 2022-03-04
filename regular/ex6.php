<?php ## обратные ссылки
    $str = "Hello, this <b>word</b> is bold!";
    echo "$str <br />";
    $re = '|<(\w+) [^>]* > (.*?) </\1>|xs';
    preg_match($re, $str, $matches) or die("not tags");
    echo htmlspecialchars("'$matches[2]' обрамлено тегом '$matches[1]' ");
?>