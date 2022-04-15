<?php ## локальное кэширование ресурса по идентификатору
    class FileLogger
    {
        // массив всех созданных объектов-журналов
        static public $loggers = [];
        // время создания объекта
        private $time;
        // закрытый конструктор: создание объектов извне запрещено!
        private function __construct($fname)
        {
            // запоминаем время создания этого объекта
            $this->time = microtime(true);
        }
        // открытый метод, предназначенны для создания объектов класса.
        // создать новый объект можно только с его помощью
        public static function create($fname)
        {
            // вначале проверяем, возможно объект для указанного имени
            // файла уже существует. тогда его и возвращаем
            if (isset(self::$loggers[$fname]))
                return self::$loggers[$fname];
                // а иначе создаём полностью новый объект и сохраняем ссылку
                // на него в статическом массиве
            return self::$loggers[$fname] = new self($fname);
        }
        // возвращаем время создания объекта
        public function getTime() {return $this->time;}
        // дальше могут идти остальные методы класса
    }
    // пример использования класса
    #$logger = new FileLogger("a");  // не получиться, доступ закрыт
    $logger1 = FileLogger::create("file.log"); //
    sleep(1); // как будто бы программа немного поработала
    $logger2 = FileLogger::create("file.log"); //ok
    // выводим времена создания объектов
    echo "{$logger1->getTime()}, {$logger2->getTime()}";
?>