<?php
function calc($x) {
    $a = 10; $b = 5;

    switch ($x) {
        case "+":
            return ($a + $b);
        case "-":
            return ($a - $b);   
        case "*":
            return ($a * $b);
        case "/":
            return ($a / $b);
    }
}

$x = "-"; $res = calc($x);
echo "계산의 결과: ".$res;
?>