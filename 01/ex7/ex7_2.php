<?php
$menu = "p";

switch ($menu) {
    case "p":
    case "P":
        echo "Pizza를 주문하셨습니다."; break;
    case "s":
    case "S":
        echo "Spaghetti를 주문하셨습니다."; break;
    case "r":
    case "R":
        echo "Risotto를 주문하셨습니다."; break;
    case "d":
    case "D":
        echo "Drink를 주문하셨습니다."; break;
    default:
        echo "메뉴에 없습니다.";
}
?>