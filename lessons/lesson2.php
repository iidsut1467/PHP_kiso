<?php
// 1
$a = 9;
$b = 4;
if ($a > $b) {
    echo "変数aの方が大きいです";
} else {
    echo "変数bの方が大きいです";
}


// 2
$c = 7;
if ($c % 2 == 0) {
    echo "偶数です";
} else {
    echo "奇数です";
}


// 3
$score = 78;
if ($score == 100) {
    echo "AA";
} elseif ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "E";
}


// 4
$integer = -29;
if ($integer > 0) {
    echo "正の数です";
} elseif ($integer < 0) {
    echo "負の数です";
} else {
    echo "0です";
}


// 5
$age = 37;
if ($age >= 0 && $age <= 5) {
    echo "無料";
} elseif ($age <= 12) {
    echo "200円";
} elseif ($age <= 70) {
    echo "500円";
} else {
    echo "無料";
}

?>
