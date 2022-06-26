<?php ## использование функции __autoload()
//// не работает нормально, так и не разобрался

    // функция автозагрузки классов
    
    function _autoload($classname)
    {
        require_once(__DIR__."/$classname.php");
    }
    // использование классов
    $page = new PHP7\Page('о нас', 'содержимое страницы');
    $page->tags();
?>