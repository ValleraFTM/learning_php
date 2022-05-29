<?php ## "ручная" реализация наследования
    // вначале подключаем "базовый" класс
    require_once("File/Logger.php");
    // класс, добавляющий в FileLogger новую функциональность
    class FileLoggerDebug0
    {
        // объект "базового" класса
        private $logger;
        // конструктор нового класса. создает объект fileLogger
        public function __construct($name, $fname)
        {
            $this->logger = new FileLogger($name, $fname);
            // здесь можно проинициализировать другие свойства текущего класса
        }
        // добавляем новый метод
        public function debug($s, $level = 0)
        {
            $stack = debug_backtrace();
            $file = basename($stack[$level]['file']);
            $line = $stack[$level]['line'];
            $this->logger->log("[at $file line $line] $s");
            }
            // оставляем на месте старый метод log()
            public function log($s) {return $this->logger->log($s);}
            // такие методы посредники мы должны создать для
            // каждого метода из FileLogger

    }
    ?>