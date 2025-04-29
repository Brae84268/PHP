<?php
    session_start();
    $_SESSION["userid"] = "brae123";
    $_SESSION["username"] = "Brae";

    echo "
    <script>
        location.href = 'ex4_4.php';
    </script>"
?>