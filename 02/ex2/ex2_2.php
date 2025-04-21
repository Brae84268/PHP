<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>입력</title>
  </head>
  <body>
    <form method="post" action="ex2_2.php">
      <input type="text" name="in" />
      <input type="submit" value="전송" />
    </form>
    <?php
        function hap($a) {
            $sum = 0;
            for ($i = 1; $i <= $a; $i++) {
                $sum += $i;
            }
            return $sum;
        }

        $num = (int)($_POST["in"]);
        echo hap($num);
    ?>
  </body>
</html>
