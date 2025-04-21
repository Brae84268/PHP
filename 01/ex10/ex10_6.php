<?php
$n = 1; $cnt = 0;

while ($n <= 50) {
    if ($n % 3 == 0) {
        $cnt++;
    }
    $n++;
}

echo "1부터 50까지의 3의 배수의 개수: ".$cnt;
?>