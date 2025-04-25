<?php
    $score = array(92, 85, 93, 77, 99);

    $sum = array_sum($score);
    $avg = $sum / count($score);

    echo "합계: ".$sum."<br>";
    echo "평균: ".$avg;
?>