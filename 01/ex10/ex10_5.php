<?php
$n = 1; $sum = 0;

while ($n <= 20) {
    if ($n % 2 == 0){
        $sum += $n;
    }
    $n++;
}
echo "1부터 20까지의 짝수의 합: ".$sum;
?>