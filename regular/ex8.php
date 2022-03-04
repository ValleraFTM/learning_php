<?php ## именование карманов
    $str = "2022-03-04";
    $re = "|^(?<year>\d{4})-(?<month>\d{2})-(?'day'\d{2})$|";
    preg_match($re,$str,$matches) or die("соответствий не найдено");
    echo "День: ". $matches['day']. " <br />";
    echo "Месяц: ". $matches['month']."<br />";
    echo "Год: ". $matches['year']."<br />";
?>