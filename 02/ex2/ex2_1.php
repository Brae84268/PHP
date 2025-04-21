<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>입력</title>
</head>
<body>
<form method="post" action="ex2_1.php">
<input type="text" name="in">
<input type="submit" value ="전송">
</form>
<?php
function Multiple3($a) {
    if ($a % 3 == 0)
        return "3의 배수이다";
    else
        return "3의 배수가 아니다";
}

$num = (int)($_POST["in"]);
var_dump($num);
echo Multiple3($num);
?>
</body>
</html>
