<?php
$sum3 = 0;
$sum7 = 0;

for ($i = 1; $i <= 50; $i++){
    if ($i % 3 == 0) {
        $sum3 += $i;
    }
    if ($i % 7 == 0) {
        $sum7 += $i;
    }
}

if ($sum3 > $sum7) {
    echo "3의 배수의 합이 더 큽니다: ".$sum3;
} else if ($sum3 < $sum7) {
    echo "7의 배수의 합이 더 큽니다: ".$sum7;
}
?>