<?php
    setcookie("userid", "hong123", time() + 24 * 60 * 60 * 30);

    echo "
    <script>
        location.href = 'ex3_4_cookie_page.php;
    </script>";
?>