<?php
    $arr = array(10, 40, 30, 20, 50); 
    $arr2 = array("A", "C", "E", "B", "D");

    print_r($arr);
    echo "<br>----정렬 후----<br>";
    sort($arr, SORT_NUMERIC);
    print_r($arr);
    echo "<br>";
    echo "<br>";

    print_r($arr2);
    echo "<br>----정렬 후----<br>";
    sort($arr2, SORT_STRING);
    print_r($arr2);
?>