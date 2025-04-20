<?php
$A = 10; $B = 5; $op = "+";

switch ($op) {
    case "+":
        echo "더하기를 선택하셨습니다. 값은".$A + $B."입니다."; break;

    case "-":
        echo "빼기를 선택하셨습니다. 값은".$A - $B."입니다."; break;

    case "*":
        echo "곱하기를 선택하셨습니다. 값은".$A * $B."입니다."; break;

    case "/":
        echo "나누기를 선택하셨습니다. 값은".$A / $B."입니다."; break;
    
    default:
        echo "잘못 선택하셨습니다.";
}
?>