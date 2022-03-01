<?php ## вывод дат
    echo date("1 dS of F Y h:i:s A"). "<br />";
    echo date("сегодня d.m.Y <br />")."<br />";
    echo date("Этот файл датирован d.m.Y <br />", filectime(__FILE__));
?>