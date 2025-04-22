<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>입력</title>
  </head>
  <body>
    <form method="post" action="ex4_1.php">
      <input type="text" name="dat1" /><br />
      <input type="text" name="dat2" /><br />
      <input type="text" name="dat3" /><br />
      <input type="text" name="dat4" /><br />
      <input type="text" name="dat5" /><br />
      <input type="text" name="dat6" /><br />
      <input type="text" name="dat7" /><br />
      <input type="submit" value="전송" />
    </form>
    <?php
        $min = 999; $sum = 0;
        $data
        = array($_POST["dat1"], $_POST["dat2"], $_POST["dat3"], $_POST["dat4"], 
        $_POST["dat5"], $_POST["dat6"], $_POST["dat7"]);

        $sum
        = $_POST["dat1"] + $_POST["dat2"] + $_POST["dat3"] + $_POST["dat4"] +
        $_POST["dat5"] + $_POST["dat6"] + $_POST["dat7"];

        $diff = array(0, 0, 0, 0, 0, 0, 0);

        $avg = $sum / 7;

        for ($i = 0; $i < 7; $i++) {
            $diff[$i] = ((int)($avg) - $data[$i] < 0 ? -((int)($avg) - $data[$i]) : (int)($avg) - $data[$i]);
        }
        for ($i = 0; $i < 7; $i++) {
            if ($min > $diff[$i]) {
                $min = $diff[$i];
                $k = $i;
            }
        }

        printf("합은 %d 입니다.", $sum); echo "<br>";
        printf("평균은 %2f 입니다.", $avg); echo "<br>";
        printf("평균에 근사한 값은 %d 입니다.", $data[$k]); echo "<br>";       
    ?>
  </body>
</html>
