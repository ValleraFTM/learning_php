<?php ## Базовый класс для кэшируемых страниц
    require_once "Page.php";
    class Cached extends Page
    {
        // время действия кэша
        protected $expires;
        // хранилище
        protected $store;
        
        //конструктор класса
        public function __construct($title = '', $content = '', $expires = 0)
        {
            // вызываем конструктор базового класса Page
            parent::__construct($title, $content);
            // устанавливаем время жизни кэша
            $this->expires = $expires;
            // подготовка хранилища
            $this->store = new Memcached();
            $this->store->addServer('localhost', 11211);
            // размещение данных в хранилище
            $this->set($this->id('title'), $title);
            $this->set($this->id('content'), $content);
        }
        // проверить, есть ли позиция $key в кэше
        protected function isCached($key)
        {
            return (bool) $this->store->get($key);
        }
        // поместить в кеш по ключу $key значение $value.
        // в случае если ключ уже существует:
        // 1. Не делать ничего, если $force принимает значение false.
        // 2. Переписать, если $force принимает значение true.
        protected function set($key, $value, $force = false)
        {
            if ($force) {
                $this->store->set($key, $value, $this->expires);
            } else {
                if($this->isCached($key)) {
                    $this->store->set($key, $value, $this->expires);
                }
            }

        }
        // извлечение значения $key из кэша
        protected function get($key)
        {
            return $this->store->get($key);
        }
        // формируем уникальный ключ для хранилища
        public function id($name)
        {
            die("что здесь делать?!??! неизвестно");
        }
        public function title()
        {
            if ($this->isCached($this->id('title'))){
                return $this->get($this->id('title'));
            } else { return parent::title();}
        }
        // получение содержимого страницы
        public function content() 
    {
        if ($this->isCached($this->id('content'))){
            return $this->get($this->id('content'));
        } else { return parent::content();}

    }

    }
?>