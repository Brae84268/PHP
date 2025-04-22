<?php
    $Arr = array(
        array(0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0)
    );

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++){
            if ($i + $j >= 5)
                $Arr[$i][$j] = 0;
            else
                $Arr[$i][$j] = $i + $j + 1;

        }
    }

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            printf("%2d", $Arr[$i][$j]);
        }
        echo "<br>";
    }
?>