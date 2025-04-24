<?php
    $tel = "010-1234-5678";
    $arr = explode("-", $tel);

    $tel2 = $arr[0].$arr[1].$arr[2];
    echo $tel2."<br>";

    echo "arr[0] = ".$arr[0]."<br>";
    echo "arr[1] = ".$arr[1]."<br>";
    echo "arr[2] = ".$arr[2]."<br>";
?>