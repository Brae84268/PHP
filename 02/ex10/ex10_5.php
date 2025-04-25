<?php
    $arr = array("orange" => 2000, "banana" => 3000, "apple" => 1500);
    print_r($arr); echo "<br>"; echo "<br>";

    ksort($arr);
    print_r($arr); echo "<br>";echo "<br>";

    asort($arr);
    print_r($arr); echo "<br>";
?>