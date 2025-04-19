<?php
$a = "A"; $b = "B";

$c = !2 || 3 && !0; // true
var_dump($c);
echo "<br>";

$c = $a < $b && $a == $b; // false
var_dump($c);
echo "<br>";

$c = $a < $b || $a == $b; // true
var_dump($c);
echo "<br>";
?>