<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>입력</title>
  </head>
  <body>
    <form method="post" action="ex2_4.php">
      <input type="text" name="in" />
      <input type="submit" value="전송" />
    </form>
    <?php
        function Hakjum($a) {
            if ($a >= 90)
                return "A";
            else if ($a >= 80)
                return "B";
            else if ($a >= 70)
                return "C";
            else if ($a >= 60)
                return "D";
            else
                return "F";
        }

        $jumsu = (int)($_POST["in"]);
        echo "학점은 ".Hakjum($jumsu)."입니다.";
    ?>
  </body>
</html>