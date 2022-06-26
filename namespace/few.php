<?php ## использование пространства имен в одном файле
namespace PHP7\functions
{
    // отладочная функция
function debug($obj)
{
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}
}
namespace PHP7\classes
{
    // класс страницы
class Page
{
    //заголовок
    protected $title;
    // содержимое
    protected $content;
    // конструктор класса
    public function __construct($title='', $content = '')
    {
        $this->title = $title;
        $this->content = $content;
    }
}
}
?>