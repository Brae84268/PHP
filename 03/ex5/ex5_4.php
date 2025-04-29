<?php
    class Person {
        public $name;

        public function __construct($name) {
            $this -> name = $name;
        }
        public function __destruct() {
            echo "제 이름은 " . $this -> name . " 입니다.";
        }
    }

    $person = new Person("김브래");
?>