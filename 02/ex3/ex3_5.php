<?php
    $num = array(); $su = 0; $sum = 0;

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $num[$i][$j] = ++$su;
            $no = sprintf("%02d",$num[$i][$j]);
            echo $no." ";

            if ($i == $j)
                $sum += $num[$i][$j];        
            }
            echo "<br>";
    }
    echo "<br>";
    echo "합: ".$sum;
?>