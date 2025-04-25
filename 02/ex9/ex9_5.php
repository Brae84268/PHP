<?php
    $arr = array(10, 20, 30, 40, 50);
    
    $element = current($arr);

    while ($element) {
        echo $element."<br>";
        $element = next($arr);
    }

    echo "------------------------<br>";

    $element = end($arr);

    while ($element) {
        echo $element."<br>";      
        $element = prev($arr);
    }
?>