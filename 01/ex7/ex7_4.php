<?php
$jum = 100;
$su = ($jum / 10);

switch ($su) {
    case 10:
    case 9:
        echo "성적은 A 입니다."; break;
    case 8:
        echo "성적은 B 입니다."; break;
    case 7:
        echo "성적은 C 입니다."; break;
    case 6:
        echo "성적은 D 입니다."; break;
    default:
        echo "성적은 F 입니다."; break;
}
?>