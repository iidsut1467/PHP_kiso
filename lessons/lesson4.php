<?php
// 1
// Section 1 content remains the same...

// 2
// Section 2 content remains the same...

// 3
// Section 3 content remains the same...

// 4
// Section 4 content remains the same...

// 5
// 判別する回文の変数、その回文の文字数の変数、回分の真偽の変数を用意 → for文で回分かどうかを判別する → その中で合致しなかった場合回分の真偽を偽にしてループを終える → その真偽に従って回分かどうかを出力する
$sentence = "しんぶんし";
$length = strlen($sentence);
$isPalindrome = true;

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