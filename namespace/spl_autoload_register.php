<?php ## использование функции spl_autoload_register()
    spl_autoload_register();
    // использование классов
    $page = new PHP7\Page('о нас', 'содержимое страницы');
    $page->tags();
?>