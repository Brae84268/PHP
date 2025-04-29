<?php
    class Circle {
        public $r;

        public function setCircle($r) {
            $this -> r = $r;
        }

        public function getArea() {
            $area = $this -> r * $this -> r * 3.14;
            return $area; 
        }
    }

    $circle = new Circle();
    $circle -> setCircle(5);

    echo "반지름: " . $circle -> r . "<br>";
    echo "원의 넓이: " . $circle -> getArea();
?>