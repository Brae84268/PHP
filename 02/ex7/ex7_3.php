<?php
    $tel = "010-1234-5678";
    $tel2 = str_replace("-", ".", $tel);
    echo $tel2."<br>";

    $str = "Hi~ Nice to meet you~";
    $str2 = str_replace("~", "!!!", $str);
    echo $str2;
?>