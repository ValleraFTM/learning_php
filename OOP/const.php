<?php ## использование констант в классах
class cls 
{
    const NAME = 'cls';
    public function method()
    {
        // echo $this->NAME; // ошибочное обращение
        echo self::NAME; 
        echo "<br />";
        echo cls::NAME; 
        echo "<br />";
    }
}
echo cls::NAME; // cls
?>