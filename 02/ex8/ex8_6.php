<?php
    function check($a, $b) {
        if (strcasecmp($a, $b) == 0) {
            echo "SAME<br>";
        } else {
            echo "DIFFERENT<br>";
        }
    }

    echo "nice와 nice는 ";
    check("nice" , "nice");
    echo "nice와 NICE는 ";
    check("nice" , "NICE");
?>