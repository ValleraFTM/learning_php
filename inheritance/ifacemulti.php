<?php ## наследование интерфейсов
// SEO информация о странице
interface Seo
{
    public function keywords(); // тело не указывается
    public function description();
    public function ogs();
}
// набор тегов, которыми снабжается страница
interface Tag
{
    public function tags(); // возвращает теги
}
// список авторов материала
interface Author extends Tag
{
    public function info($id); // информация об авторе
}
// новости снабжаются SЕО-информацией и списком авторов
class News implements Seo, Author
{
    private $id;
    public function keywords()
    {
        // $query = "SELECT keywords FROM seo WHERE id = :id LIMIT 1";
    }
    public function description()
    {
        // $query = "SELECT description FROM seo WHERE id = :id LIMIT 1";
    }
    public function ogs()
    {
        // $query = "SELECT ogs FROM seo WHERE id = :id LIMIT 1";
    }
    public function tags()
    {
        // $query = "SELECT * FROM authors WHERE id IN(:ids)";
    }
    public function info($id)
    {
        // $query = "SELECT * FROM authors WHERE id = :id";
    }
    // также нужно определить конструктор, деструктор и другие методы
} 
?>