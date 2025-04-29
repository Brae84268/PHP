<?php
    class Rectangle {
        public $width;
        public $height;
        public function getLenght() {
            return $this -> width * 2 + $this -> height * 2;
        }
        public function getArea() {
            return $this -> width * $this -> height;
        }
    }

    $rect = new Rectangle();

    $rect -> width = 20;
    $rect -> height = 10;

    echo "너비: " . $rect -> width . "<br>";
    echo "높이: " . $rect -> height . "<br>";
    echo "사각형 둘레의 길이: " . $rect -> getLenght() . "<br>";
    echo "사각형 넓이: " . $rect -> getArea();
?>