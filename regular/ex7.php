<?php ## игнорирование карманов
    $str = "2022-03-04";
    $re = '|^(?:\d{4})-(?:\d{2})-(\d{2})$|';
    preg_match($re,$str,$matches) or die("соответствий не найдено");
    echo htmlspecialchars("день: ".$matches[1]);
?>