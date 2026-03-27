<?php 
for($i = 0; $i <= 100; $i++) {
    if($i % 10 === 0) {
        echo $i;
    }
}


for($i = 0; $i <= 100; $i++) {
    if($i % 2 === 0) {
        echo $i;
    }
}


for($i = 0; $i <= 100; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz";
    } elseif($i % 3 === 0) {
        echo "Fizz";
    } elseif($i % 5 === 0) {
        echo "Buzz";
    } else {
        echo "$i";
    }
}


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



$sentence = "しんぶんし";
$length = $sentence.length;
for(i = 0; i = $length; i ++) {
    if ($sentence[0 + i] = $sentence[$length - i]) {
    
    }       
// $sentenceの文字数を入力して最大と最小を比較して合ってる場合次に進む、最大最小から１小さいものを比べて合ってる場合次に進むを繰り返す　偶数:1-4, 2-3, 3-2, 4-1　奇数:1-5, 2-4, 3-3, 4-2, 5-1
// この場合、奇数だった時に正しく回文か判定ができない。　→　できた
 echo "回文です";
 } else {
 echo "回文ではありません"; 
 }
    
?>
