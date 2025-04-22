<?php
    $arr_ex = array();

    $arr_ex[0] = 95;
    $arr_ex[1] = 100;
    $arr_ex[2] = 87;
    $arr_ex[3] = 81;
    $arr_ex[4] = 88;

    $hap = 0;
    for ($i = 0; $i < 5; $i++) {
        $hap += $arr_ex[$i];
        echo "arr_ex[".$i."]= ".$arr_ex[$i]."<br>";
    }
    $avg = $hap / 5;
    echo "5과목의 평균: ".$avg;
?>