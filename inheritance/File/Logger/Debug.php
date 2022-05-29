<?php ## Наследование
    // вначале подключаем "базовый" класс
    require_once "File/Logger/Debug.php";
    // класс, добавляющий в FileLogger новую функциональность
    class FileLoggerDebug extends FileLogger
    {
        // Конструктор нового класса. просто переадресует вызов
        // конструктору базового класса, передавая немного другие параметры
        public function __construct($fname)
        {
            // такой синтаксис используется для вызова методов базового класса
            // обратите внимание, что ссылки $this нет ! она подразумевается.
            parent::__construct(basename($fname), $fname);
            // здесь можно проинициализировать другие свойства текущего
            // класса, если они будут.
        }
        // добавляем новый метод
        public function debug($s, $level = 0)
        {
            $stack = debug_backtrace();
            $file = basename($stack[$level]['file']);
            $line = $stack[$level]['line'];
            // вызываем функцию базового класса
            $this->log("[at $file line $line] $s");
        }
        // все остальные методы и свойства наследуются автоматически!
    }
    ?>