<?php ## Переопределение функции клонирования
    class Human
    {
        private static $i = 25550690;
        // идентификатор
        public $dna;
        public $text;
        // конструктор. присваивает очередной идентификатор.
        public function __construct()
        {
            $this->dna = self::$i++;
            $this->text = "There is no spoon?";
        }
        // при клонировании идентификатор модифицируется
        public function __clone()
        {
            $this->dna = $this->dna."(cloned)";
        }
    }
    // создаём новый объект...
    $neo = new Human;
    // ... и его клон
    $virtual = clone $neo;
    // убеждаемся в том, что их идентификаторы различаются
    echo "Neo DNA id: {$neo->dna}, text: {$neo->text}<br /><br />";
    echo "Virtual twin id: {$virtual->dna}, text: {$virtual->text}<br /><br />";
?>