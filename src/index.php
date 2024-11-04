<?php
// 変数
//echo "Hello World!";
//echo "<br>";
//$num_1 = 123;
//$num_2 = 324;
//$num_string = $num_1 . $num_2;
//$num_sum = $num_1 + $num_2;
//var_dump($num_string);
//echo "<br>";
//var_dump($num_sum);
//
//
//// 定数
//const MAX = 100;
//echo "<br>";
//var_dump(MAX);
//
//// 配列
//echo "<br>";
//$array = [1, 2, 3, 4, 5];
//var_dump($array);
//echo "<br>";
//
//$array_2 = [
//    ['orange', 'apple'],
//    ['dog', 'cat']
//];
//
//echo "<br>";
//echo "<pre>";
//var_dump($array_2);
//echo "</pre>";

// 連想配列
$array_member = [
    '田中' => [
        'height' => 180,
        'hobby' => '野球'
    ],
    '佐藤' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ]
];
echo '<br>';
echo $array_member['田中']['height'];
echo '<br>';
echo $array_member['佐藤']['hobby'];

// 条件分岐
$age = 20;
$message = $age >= 20 ? '成人です' : '未成年です';
echo '<br>';
echo $message;

// 繰り返し
$array_fruits = [
    'apple' => [
        'price' => 100,
        'stock' => 10
    ],
    'banana' => [
        'price' => 150,
        'stock' => 5
    ],
    'orange' => [
        'price' => 200,
        'stock' => 8
    ]
];
foreach($array_fruits as $key => $fruit) {
    echo '<br>';
    echo $key . 'は';
    echo '<br>';
    echo $fruit['price']. '円で';
    echo '<br>';
    echo '個数'. $fruit['stock']. '個です';
}

?>