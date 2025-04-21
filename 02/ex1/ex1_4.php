<?php
function sum($a, $b) {
    return $a + $b;
}

function minus($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $a / $b;
}

$x = 20; $y = 10;

$res = sum($x, $y);
echo "덧셈의 결과: ".$res."<br>";

$res = minus($x, $y);
echo "뺄셈의 결과: ".$res."<br>";

$res = multiply($x, $y);
echo "곱셈의 결과: ".$res."<br>";

$res = divide($x, $y);
echo "나눗셈의 결과: ".$res."<br>";
?>