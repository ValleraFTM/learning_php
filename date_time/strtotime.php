<?php ## использование функции strtotime()
    $check = [
        "now", 
        "10 September 2015",
        "+1 day",
        "+1 week",
        "+1 week 2 days 4 hours 2 seconds",
        "next Thursday",
        "last Monday",
    ];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>использование функции strtotime()</title>
</head>
<body>
    <table width="100%" border="5px">
        <tr align="left">
            <th>Входная строка</th>
            <th>Timestamp</th>
            <th>Получившаяся дата</th>
            <th>Сегодня</th>
        </tr>
        <?php foreach ($check as $str) {?>
            <tr>
                <td><?=$str?></td>
                <td><?=$stamp = strtotime($str)?></td>
                <td><?=date("Y-m-d H:i:s", $stamp)?></td>
                <td><?=date("Y-m-d H:i:s", time())?></td>
            </tr>
        <?php } ?>    
    </table>
<?php
echo "<br ?>";
$jd = GregorianToJD(10, 11, 1970);
echo "$jd<br />";
$gregorian = JDToGregorian($jd);
echo "$gregorian<br />";
$list = explode($gregorian, "/");
?>
</body>
</html>