<?php

// 1.
// -Увеличить стоимость товара на 30%
// -Вывести весь товар: цена iphone = 39000р.; (с помощью цикла foreach)
// ==========================================================================
$arr = [
    ['name'=>'iphone','price'=>30000],
    ['name'=>'macbook','price'=>130000],
    ['name'=>'macpro','price'=>430000]
];

round ($result); // округляем
echo $result; // выводим результат

echo "<br>";

$percent = 30; 

// foreach ($arr as $key=>$value){
//     $oldPrice = "$value[price]";
//     $percent = $oldPrice / 100 * $percent;
//     $newPrice = $oldPrice + $percent; 

//     echo "Цена $value[name]: $newPrice <br>";
// }


foreach ($arr as $key=>$value){
    echo "Цена $value[name]: $value[price] <br>";
}
echo "<br>";
echo "<br>";

// ==========================================================================
// 2.Создать массив со значениями от 1 до 100 (используя функцию), найти сумму чисел
$arr1 = range(1, 100); 

foreach ($arr1 as $value){
    echo $value," <br>";
}

echo "<br>";

echo "сумма чисел:" . array_sum($arr1);
echo "<br>";
echo "<br>";
// ==========================================================================
// 3.Создать массив со значениями от (a-z) и соединить их в строку)
    $letters = range('a', 'z');

    foreach ($letters as $letter){
        echo $letter,"<br>";
    }
// ==========================================================================
?>

