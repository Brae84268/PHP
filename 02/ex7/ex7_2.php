<?php
    $dat = "2025-04-24";
    $dat2 = str_replace("-", "/", $dat);
    echo $dat2."<br>";

    $str = "안녕하세요.\n반갑습니다.";
    $str2 = str_replace("\n", "<br>", $str);
    echo $str2;
?>