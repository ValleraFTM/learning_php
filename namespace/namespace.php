<?php ## объявление пространства имен
namespace PHP7;

// отладочная функция
function debug($obj)
{
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}
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
?>