<?php ## проверка класса FileLoggerDebug0
    require_once("File/Logger/Debug0.php");
    $logger = new FileLoggerDebug0("test", "test.log");
    $logger->log("Обычное сообщение");
    $logger->debug("отладочное сообщение");
?>