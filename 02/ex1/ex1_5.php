<?php
function isEven($a) {
    if ($a % 2 == 0)
        return true;
    else
        return false;
}

$x = 10;

if (isEven($x))
    echo $x."는 짝수입니다.<br>";
else
    echo $x."는 홀수입니다.<br>";
?>