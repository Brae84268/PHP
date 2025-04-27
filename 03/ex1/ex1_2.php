<?php
    $timestamp = time();
    echo "현재 시간 타임스탬프: ".$timestamp."<br>";

    echo "현재 시간: ".date("Y-m-d H:i:s", $timestamp);

    echo "<br>";
    echo mktime(0, 0, 0, 1, 1, 2000)."<br>";
    echo time();
?>