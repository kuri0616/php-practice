<?php

// forの基本構文
// break, continueも使える

echo 'forの基本構文';
echo '<br>';
for($i = 0; $i < 10; $i++) {
    echo $i;
    echo '<br>';
}

// whileの基本構文
echo 'whileの基本構文';
echo '<br>';
$i = 0;
while ($i < 10) {
    echo $i;
    echo '<br>';
    $i++;
}

//switchの基本構文
echo 'switchの基本構文';
echo '<br>';
$signal = 'green';
switch ($signal) {
    case 'red':
        echo 'stop';
        break;
    case 'blue':
    case 'green':
        echo 'go';
        break;
    case 'yellow':
        echo 'caution';
        break;
    default:
        echo 'wrong signal';
        break;
}

/* switchの注意点
    ・breakを書き忘れると、次のcaseも実行される
    ・デフォルトでは比較演算子が==なので、型の比較も行いたい場合は、===を使う
    ・上記のことから複雑になりがちなので、基本的にif文を使う
*/

?>