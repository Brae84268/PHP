<?php
    $str = "&lt;h3&gt;PHP 프로그램은 유용합니다.&lt;/h3&gt;";
    echo $str."<br>";

    $str2 = htmlspecialchars_decode($str);
    echo $str2;
?>