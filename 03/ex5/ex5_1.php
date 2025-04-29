<?php
    class Person {
        public $name;
        public $age;
        public function intro() {
            echo "이름: " . $this -> name .", 나이: " . $this -> age; 
        }
    }

    $brae = new Person();

    $brae -> name = "김브래";
    $brae -> age = 25;
    
    $brae -> intro();
?>