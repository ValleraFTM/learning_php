<?php ## статические страницы
    require_once "Cached.php";
    class StaticPage extends Cached
    {
        // конструктор класса
        public function __construct($id)
        {
            // проверяем, нет ли такой страницы в кэше
            if ($this->isCached($this->id($id))) {
                // есть, инициализируем объект содержимым кэша
                parent::__construct($this->title(), $this->content());
            } else { 
                //данные пока не кэшированы, извлекаем
                // содержимое из базы данных
                $query = "SELECT * FROM static_pages WHERE id = :id LIMIT 1";
                $stn = $dbh->prepare($query);
                $sth = $dbh->execute($query, [$id]);
                $page = $sth->fetch(PDO::FETCH_ASSOC);
                parent::__construct($page['title'], $page['title']);
                ###### parent::__construct("Контакты", "содержимое страницы");
            }
        }
        // уникальный ключ для кэша
        public function id($name)
        {
            return "static_page_{$id}";
        }
    }
?>