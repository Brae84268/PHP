<?php
    class Member {
        public $name;

        public function getName() {
            return $this -> name;
        }
    }

    $mem = new Member();

    $mem -> name = "김브래";
    echo "이름: " . $mem -> getName();
?>