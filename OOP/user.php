<?php ## class User
    class user
    {
        // конструктор
        public function __construct($name, $password)
        {
            $this->name =       $name;
            $this->password =   $password;
            $this->referrer =   $_SERVER['PHP_SELF'];
            $this->time =       time();
        }
        public function __sleep()
        {
            return ['name', 'referrer', 'time'];
        }
        // user.name
        public $name;
        // user.password
        public $password;
        // последняя посещенная страница
        public $referrer;
        // время авторизации пользователя
        public $time;
    }
    ?>