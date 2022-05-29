<?php ## Базовый класс страницы
    class Page 
    {
        // любая страница имеет заголовок
        protected $title;
        // и содержимое
        protected $content;
        // Конструктор класса
        public function __construct($title = '', $content ='')
        {
            $this->title = $title;
            $this->content = $content;
        }
        // получение заголовка страницы
        public function title()
        {
            return $this->title;
        }
        // получение содержимого страницы
        public function content()
        {
            return $this->content;
        }
        // формирование HTML-представления страницы
        public function render()
        {
            echo "<h1>".htmlspecialchars($this->title)."</h1>";
            // возможно очепятка
            echo "</p>".n12br(htmlspecialchars($this->content()))."</p>";
        }
    }
?>