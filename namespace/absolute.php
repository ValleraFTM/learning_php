<?php ## доступ к глобальному пространству имен
    namespace PHP7;

    function strlen($str)
    {
        return "мой strlen -".count(str_split($str));
    }
    // это PHP7\strlen
    echo strlen("Hello world!")."<br />";
    // это стандартная функция strlen()
    echo \strlen("Hello world!")."<br />";
?>