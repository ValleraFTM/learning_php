<?php ## импортирование
require_once 'few.php';

use PHP7\classes\Page as Page;
use PHP7\functions as functions;

$page = new Page('Контакты', "содержимое страницы");
functions\debug($page);
?>