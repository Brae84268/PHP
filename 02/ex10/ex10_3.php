<?php
    $arr_01 = array(10, 20, 30, 40, 50);
    $arr_02 = array_reverse($arr_01);

    echo "----원본----<br>";

    for ($i = 0; $i < count($arr_01); $i++) {
        echo $arr_01[$i]."<br>";
    }

    echo "<br>----array reverse 후----<br>";

    for ($i = 0; $i < count($arr_02); $i++) {
        echo $arr_02[$i]."<br>";
    }
?>