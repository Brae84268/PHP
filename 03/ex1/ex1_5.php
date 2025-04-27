<?php
    date_default_timezone_set('Asia/Seoul');
    $current_time = time();
    $time_diff = 2 * 24 * 60 * 60;
    
    $before_2day = $current_time - $time_diff;
    $after_2day = $current_time + $time_diff; 

    echo "현재 타임스탬프: ". $current_time . "<br>";
    echo "현재 시간: " . date("Y-m-d H:i:s", $current_time) . "<br>";
    echo "-----------------------------------------------------<br>";

    echo "2일 전 타임스탬프: ". $before_2day . "<br>";
    echo "2일 전 시간: " . date("Y-m-d H:i:s", $before_2day) . "<br>";
    echo "-----------------------------------------------------<br>";

    echo "2일 후 타임스탬프: ". $after_2day . "<br>";
    echo "2일 후 시간: " . date("Y-m-d H:i:s", $after_2day) . "<br>";
    echo "-----------------------------------------------------<br>";
?>