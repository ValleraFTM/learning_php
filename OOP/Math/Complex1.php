<?php ## Пример класса с методом
    class MathComplex1
    {
        public $re, $im;
        // Добавляет к текущему комплексному числу другое
        function add(MathComplex1 $y)
        {
            $this->re += $y->re;
            $this->im += $y->im;
        }
        // преобразуем число в строку
        function __toString()
        {
            return "({$this->re}, {$this->im})";
        }
    }
    ?>