<?php ## Пример класса с конструктором
class MathComplex2
{
    public $re, $im;
    // инициализация нового объекта
    function __construct($re, $im)
    {
        $this->re = $re;
        $this->im = $im;
    }
    // добавляет к текущему комплексному числу другое
    function add(MathComplex2 $y)
    {
        $this->re += $y->re;
        $this->im += $y->im;
    }
    // преобразует число в строку (например для вывода)
    function __toString()
    {
        return "({$this->re}, {$this->im})";
    }
}
?>