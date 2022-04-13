<?php ## проблема алгоритма со счётчиком ссылок
    // класс, обозначающий отца семьи
    class Father
    {
        // список детей, сразу после создания объекта пустой
        public $chidren = [];
        // выводит сообщение в момент уничтожения объекта
        function __destruct() { echo "Father умер. <br />";}
    }
    // ребенок некоторого отца
    class Child 
    {
        // кто отец этого ребенка?
        public $father; 
        // создаёт нового ребенка (с указанием его отца)
        function __construct(Father $father) { $this->father = $father; }
        function __destruct() {echo "Child умер. <br />"; }

    }
    // жил да был Авраам
    $father = new Father;
    // Авраам родил Исаака
    $child = new Child($father);
    // ... и прописал его на своей жилплощади
    $father->children[] = $child;
    echo "Пока что все живы... Убиваем всех. <br />";
    // прошло время и все умерли
    $father = $child = null;
    echo "Все умерли, конец программы. <br />";
    // но программа говорит, что остались зомби!
    ?>