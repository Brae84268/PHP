<?php
$num = 1;

switch ($num) {
    case 1:
        echo "예금 조회선택";
        break;
    case 2:
        echo "예금 출금선택";
        break;
    case 3:
        echo "예금 입금선택";
        break;
    case 4:
        echo "예금 이체선택";
        break;
    default:
        echo "잘못 누르셨습니다.";
}
?>