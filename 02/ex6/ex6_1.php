<?php
    $str = "<h3>PHP PROGRAMING은 서버 프로그래밍 입니다.</h3>";
    echo $str."<br>";

    $str2 = htmlspecialchars($str);
    echo $str2;
?>