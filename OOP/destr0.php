<?php ## Явное освобождение ресурсов
    require_once "File/Logger0.php";
    // Создаём в цикле много объектов FileLogger0
    for ($n = 0; $n < 50; $n++) {
        $logger = new FileLogger0("test$n", "test.log");
        $logger->log("hello!");
        // представим, что мы случайно забыли вызвать close()
        // $logger->close();
    }
    ?>