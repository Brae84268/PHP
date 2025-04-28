<?php
    $file = fopen("data.csv", "r");
    $header = fgetcsv($file);
    $num = count($header);

    echo "<h3>5명 학생의 " . $num . "과목의 합계/평균 구하기</h3>";
    $cnt = 0;
    while (!feof($file)) {
        $sum = 0;
        $line = fgetcsv($file);
        //print_r($line); echo "<br>";
        foreach ($line as $v) {
            $sum += $v;
        }
        $avg = round($sum / $num, 2);
        echo "합계:" . $sum . "평군:" . $avg . "<br>";
        $cnt++;
        if ($cnt == 5) break;
    }
    fclose($file);
?>