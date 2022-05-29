<?php ## использование трейтов
trait Seo
{
    private $keywords;
    private $description;
    private $ogs;
    public function keywords()
    {
        // $query = "SELECT keywords FROM seo WHERE id = :id LIMIT 1";
        echo "Seo::keywords<br />";
    }
    public function description()
    {
        //$query = "SELECT description FROM seo WHERE id = :id LIMIT 1";
    }
    public function ogs()
    {
        //$query = "SELECT ogs FROM seo WHERE id = :id LIMIT 1";
        echo "Seo::gs<br />";
    }
}

trait Tag
{
    public function tags()
    {
    // $query = "SELECT * FROM authors WHERE id IN(:ids)";
    echo "Tag::tags<br />";
    }
}

class News 
{
    // новости снабжаются SEO информацией и списком авторов
    use Seo, Tag;
    private $id;
}

$news = new News();
$news->keywords();
$news->tags();
?>