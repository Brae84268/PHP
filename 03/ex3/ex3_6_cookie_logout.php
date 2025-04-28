<?php
    setcookie("userid", "", time() - 3600);

    echo `
    <script>
        location.href = 'ex3_4_cookie_page.php;
    </script>`;
?>