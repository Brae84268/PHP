<?php
    $sum = 0;

    for ($i = 0; $i <= 5; $i++) {
        $num = rand(1, 50);
        $sum += $num;
        echo $num."<br>";
    }

    $avg = $sum / 5;
    echo "난수의 합: ".$sum."<br>";
    echo "난수의 평균: ".$avg;
?>