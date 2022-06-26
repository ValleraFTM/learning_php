<?php ## использование анонимной функции
    spl_autoload_register(function ($classname) {
        require_once (__DIR__."/$classname.php");        
    });
    // использование классов
    $page = new PHP7\Page('о нас', 'содержимое страницы');
    $page->tags();
?>