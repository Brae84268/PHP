<?php
    $Arr = array(
        array(0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0)
    );

    $sum = 0; $val = 1;

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $Arr[$i][$j] = $val;
            $val++;
        }
    }

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            printf("%02d ", $Arr[$i][$j]);
        }
        echo "<br>";
    }

    for ($i = 1; $i < 5; $i++) {
        for ($j = 0; $j < $i; $j++) {
            $sum += $Arr[$i][$j];
        }
    }

    printf("음영이 있는 부분의 합은 %d 입니다.", $sum);
?>