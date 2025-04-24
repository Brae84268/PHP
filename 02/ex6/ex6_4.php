<?php
    $fruit = "apple, banana, orange";
    $arr = explode(", ", $fruit);

    $favorite = $arr[0].$arr[1].$arr[2];
    echo $favorite."<br>";

    echo "arr[0] = ".$arr[0]."<br>";
    echo "arr[1] = ".$arr[1]."<br>";
    echo "arr[2] = ".$arr[2]."<br>";
?>