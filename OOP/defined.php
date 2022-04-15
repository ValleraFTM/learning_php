<?php ## проверка существования констант класса
    require_once ("const.php");

    if (defined("cls::NAME")) echo "константа определена <br />";
    else echo "константа не определена <br />";

    if (defined("cls::POSITION")) echo "константа определена <br />";
    else echo "константа не определена <br />";
?>