<?php
    class Member {
        private $name;

        public function setName($name) {
            $this -> name = $name;
        }

        public function getName(){
            return $this -> name;
        }
    }

    $mem = new Member();

    $mem -> setName("김동동");
    echo "이름: " . $mem -> getName();
?>