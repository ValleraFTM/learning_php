<?php 
    namespace PHP7;
    use \PHP7\Seo as Seo;
    use \PHP7\Tag as Tag;

    require_once "Seo.php";
    require_once "Tag.php";
    // класс страницы
    class Page
    {
        // подключаем трейты
        use  Tag, Seo;

        // заголовок
        protected $title;
        // Содержимое
        protected $content;
        // конструктор класса
        public function __construct($title='', $content = '')
        {
            $this->title = $title;
            $this->content = $content;
        }
    }
    ?>