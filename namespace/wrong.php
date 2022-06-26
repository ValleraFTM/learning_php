<?php ## использование класса PHP7\Page
namespace PHP7;
    require_once ("./PHP7/Seo.php");
    require_once (__DIR__."/PHP7/Tag.php");
    require_once (__DIR__."/PHP7/Page.php");
    //использование классов
    $page = new Page();
    $page->tags();
?>