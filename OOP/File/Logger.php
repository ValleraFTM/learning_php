<?php ## Деструктор
    // Класс, упрощающий ведение разного рода журналов
    class FileLogger
    {
        public $f;                      // открытый журнал
        public $name;                   // имя журнала
        public $lines = [];             // накапливаемые строки
        public $t;                      // 
        // Создаётся новый файл журнала или открывает дозапись в конец 
        // существующего. параметр $name - логическое имя журнала
        public function __construct($name, $fname)
        {
            $this->name = $name;
            $this->f = fopen($fname, "a+");
            $this->log("### __construct() called!");
        }
        // Гарантировано вызывается при уничтожении объекта.
        // закрывает файл журнала
        public function __destruct()
        {
            $this->log("### __destruct() called!");
            // вначале выводим все накопленные данные
            fputs($this->f, join('', $this->lines));
            // закрываем файл
            fclose($this->f);
        }
        // добавляем в журнал одну строку. она не попадает в файл сразу же,
        // а записывается в буфер и остается там до вызова __destruct().
        public function log($str)
        {
            // каждая строка предваряется текущей датой и именем журнала
            $prefix = "[".date("Y-m-d_h:i:s ")."{$this->name}] ";
            $str = preg_replace('/^/m', $prefix, rtrim($str));
            // сохраняем строку
            $this->lines[] = $str."\n";
        } 

    }
?>