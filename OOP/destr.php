<?php ## Использование класса с деструктором
    require_once "File/Logger.php";
    for ($n = 0; $n < 50; $n++) {
        $logger = new FileLogger("test$n", "test.log");
        $logger->log("Hello!");
        // теперь нет необходимости заботиться о корректном 
        // уничтожении объекта - РНР делает всё сам!
    }
    exit();
    ?>