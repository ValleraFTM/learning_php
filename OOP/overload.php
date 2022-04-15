<?php ## перехват обращений к членам класса
    class Hooker
        {
            // обычное свойство класса
            public $opened = 'opened';
            // обычный метод классах
            public function method() {echo "whoa, deja vu. <br />";}
            // в этом массиве будут храниться все "виртуальные" свойства
            private $vars = array();
            
            // перехват получения значения свойства
            public function __get($name)
            {
                echo "перехват: получаем значение $name. <br />";
                // возвращаем null, если "виртуальное" свойство ещё не определено
                return isset($this->vars[$name]) ? $this->vars[$name] : null;
            }
            
            // перехват установки значения
            public function __set($name, $value)
            {
                echo "перехват: устанавливаем значение $name равным '$value'. <br />";
                // перед записью значения удаляем пробелы
                return $this->vars[$name] = trim($value);
            }
            // перехват вызова несуществующего метода
            public function __call($name, $args)
            {
                echo "перехват: вызываем $name с аргументами:";
                var_dump($args);
                return $args[0];
            }
        }
        // иллюстрация работы класса
        $obj = new Hooker();
        echo "<b> Получаем значение обычного свойства. </b><br />";
        echo "значение: {$obj->opened}<br />";
        echo "<b> вызываем обычный method().</b><br />";
        $obj->method();
        echo "<b>присваивание несуществующему свойству.</b><br />";
        $obj->nonExistent = 101;
        echo "<b>получение значения несуществующего свойства. </b><br />";
        echo "значение: {$obj->nonExistent}<br />";
        echo "<b> обращение к несуществующему методу. </b><br />";
        $obj->nonExistent(6);
    ?>