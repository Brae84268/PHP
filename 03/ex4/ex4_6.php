<?php
    session_start();

    if(isset($_SESSION["userid"])) {
        unset($_SESSION["userid"]);
    }
    if(isset($_SESSION["username"])) {
        unset($_SESSION["username"]);
    }

    echo "
    <script>
        location.href = 'ex4_4.php';
    </script>"
?>