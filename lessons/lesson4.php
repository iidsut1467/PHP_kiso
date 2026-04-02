<?php
// 1
for($i = 0; $i <= 100; $i++) {
    if($i % 10 === 0) {
        echo $i;
    }
}


// 2
for($i = 0; $i <= 100; $i++) {
    if($i % 2 === 0) {
        echo $i;
    }
}


// 3
for($i = 0; $i <= 100; $i++) {
    if($i % 2 === 0) {
        echo $i;
    }
}


// 4
$array = array(1, 2, 3, 4, 5);
$number = 0;

if($array[0] > $array[1]) {
    $number = $array[0];
} elseif($array[2] > $array[0]) {
    $number = $array[2];
} elseif($array[3] > $array[0] && $array[3] > $array[2]) {
    $number = $array[3];
} elseif($array[4] > $array[0] && $array[4] > $array[2] && $array[4] > $array[3]) {
    $number = $array[4];
}
echo $number;


// 5
// 判別する回文の変数、その回文の文字数の変数、回分の真偽の変数を用意 → for文で回分かどうかを判別する → その中で合致しなかった場合回分の真偽を偽にしてループを終える → その真偽に従って回分かどうかを出力する
$sentence = "しんぶんし";
$length = 0;
$isPalindrome = true

// ビルトイン関数を使わずにfor文で文字列の長さを取得
for($i = 0; isset($sentence[$i]); $i++) {
    $length++;
}

for($i = 0; $i < $length/2; $i++) {
    if($sentence[$i] !== $sentence[$length - 1 - $i]) {
        $isPalindrome = false;
        break;
    }
}

if($isPalindrome === true) {
    echo "回文です";
} else {
    echo "回文ではありません";
}
