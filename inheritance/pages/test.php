<?php ## проверка виртуальных методов
require_once "StaticPage.php";
// создаем статическую страницу
$id = 3;
$page = new staticPage($id);
$page->render();
echo $page->id($id);
?>