<?php ## использование пространств имен
require_once "few.php";
$page = new PHP7\classes\Page('инфо о пыхе', phpinfo());
PHP7\functions\debug($page);
?>