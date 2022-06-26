<?php ## использование пространства имен
require_once "namespace.php";
$page = new PHP7\Page('инфо о пыхе', phpinfo());
PHP7\debug($page);
?>