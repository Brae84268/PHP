<h3>세션으로 로그인 처리하기</h3>
<?php
    session_start();

    if (!isset($_SESSION["userid"]))
        echo "<a href='ex4_5.php'>로그인</a>";
    else
        echo $_SESSION["userid"] . "님" . " | <a href='ex4_6.php'>로그아웃</a>";
?>