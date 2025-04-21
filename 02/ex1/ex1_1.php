<?php
function MAX_val($a, $b) {
    if ($a > $b) 
        return $a;
    else 
        return $b;
} 

$x = 10; $y = 20;
$res = MAX_val($x, $y);
echo $res."(이)가 더 큽니다.";
?>