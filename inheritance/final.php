<?php ## финальные методы
    class Base
    {
        public final function test() {echo "Base class";}

    }
    class Derived extends Base
    {
        public function test() {echo "Derived class";} // Ошибка! нельзя переопределить
    }
?>