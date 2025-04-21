<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>입력</title>
  </head>
  <body>
    <form method="post" action="ex2_3.php">
      <input type="text" name="brae" />
      <input type="submit" value="전송" />
    </form>
    <?php
        function IsUpper($a) {
            if ($a >= "A" && $a <= "Z")
                return true;
            else
                return false;
        }

        $ch = ($_POST["brae"]);
        if (IsUpper($ch))
            echo "대문자입니다.";
        else
            echo "대문자가 아닙니다.";
    ?>
  </body>
</html>
