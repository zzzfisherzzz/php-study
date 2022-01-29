<?php
// STRING
$name = "Artem";
$name2 = "Артем";
$age = 28;

// // gettypу - тип переменной
echo gettype($name) . "<br>"; // string

// // is_strin - проверяет или строка - 1 (true), "" (false)

echo is_string($name) . "<br>"; // 1
echo is_string($name2) . "<br>"; // 1
echo is_string($age) . "<br>"; // ""

if ( is_string($name) ) echo "$name - это строка<br>";

// // var_dump - выводит информацию о переменной
echo var_dump($name) . "<br>"; // string(5) "Artem"
echo var_dump($name2) . "<br>"; // string(10) "Артем"
echo var_dump($age) . "<br>"; // int(15)


// // (Numbers) Integer - //integer целое число в 10 системе  +- 9 квинтилионов 

$num = 29;
echo $num . "<br>";
echo PHP_INT_MAX; // максимальное число - 299223372036854775807

$num1 = 0b1010 . "<br>"; // запись числа в двоичной системе (число 10)
echo $num1; // // запись числа в двоичной системе (число 10)
$num2 = 012; // запись числа в восьмиричной системе (число 10)
echo $num2;
$num3 = 0xA; // запись числа в шестнадцатиричной системе (число 10)
echo $num3;

echo gettype($num) . "<br>";
echo var_dump($num) . "<br>";
is_int($num); // провеяет или число - 1 или ""

$b = 3.5;  //float
$c = 5E2;  //float равное 5 * 10^2   от 1.7E-308 до 1.7E+308
$d = 5E-2;  //float равное 5 / 10^2 = 0.05
// is_float // проверяет или число с плавающей точкой
if (is_float($c))echo "3.5 - число с плавающей точкой<br>";

// BOLLEAN
// Булев тип два значения ложь или истина
$rain = true;  
$snow = false;

echo "rain = $rain, snow = $snow <br>";

is_bool($rain); // проверяет или бул // 1
if (is_bool($rain))echo "Булев тип <br>";
echo gettype($rain) . "<br>";
echo var_dump($rain) . "<br>";


// NUll
$var = null;  
echo is_null($var) . "<br>"; // проверяет или null"; // 1 
echo gettype($var) . "<br>"; // NULL
echo var_dump($var) . "<br>"; // NULL


//СОСТАВНЫЕ ТИПЫ ДАННЫХ
//Массив — это поименованная совокупность однотипных элементов, упорядоченных по индексам, определяющим положение элемента в массиве.

$arr_number = [1,3,54,55]; // Ключ 0 знчение - 1 итд
echo $arr_number, "<br>"; // Array
echo $arr_number[0],"<br>";   //sВывод элемента с ключом 0 - 1
echo $arr_number[1],"<br>";   //Вывод элемента с ключом 1 - 3
echo $arr_number['1'],"<br>";   //Вывод элемента с ключом 1 - 3
$arr_number = [1,3,54,55]; // Ключ 0 знчение - 1 итд
$arr_user = ['name' => 'William','age'=>33];  // Ассоциативный массив
echo $arr_user['name'],"<br>"; // William
echo $arr_user['age'],"<br>"; // William

is_array($arr_user); // проверяет или массив
print_r($arr_user); // выводит массив на экран Array ( [name] => William [age] => 33 )

//Resource - это переменная содержащая ссылку на какой-либо внешний ресурс
// $resource = fopen('C:\OpenServer2\domains\home.home\123.txt', 'r');
// echo is_resource($resource);

//Object
$mysql = new Mysqli('localhost','root','root','brod');
echo gettype($mysql);
echo var_dump($mysql); // Array ( [name] => William [age] => 33 ) objectobject(mysqli)#1 (3) { ["client_version"]=> int(70421) ["connect_errno"]=> int(2002) ["connect_error"]=> string(25) "No such file or directory" }
//print_r($mysql);

//Неявное приведение типа
$a = 5;
echo gettype($a). "<br>"; // integer
$a = $a*1.5;  // приведение типа к float
echo gettype($a). "<br>"; // double
$a = $a . ' строка';
echo gettype($a). "<br>"; // string
$a = 5;
$b=2.24;
echo "строка ",$a.$b; // строка 52.24

echo "3.14fas"*2 . "<br>";  // Warning: A non-numeric value encountered in /tmp/1w5lh66nkyzuwm5y/tester.php on line 4 6.28


//Принудитель
$b = 3;
echo gettype($b). "<br>"; // integer
$b = (string) $b;
echo gettype($b). "<br>"; // string

$b = (float) $b;
echo gettype($b). "<br>"; // double

$b = (bool) $b;  // 0, пустая строка,пустой массив вернут false(0)
echo gettype($b). "<br>"; // boolean
echo $b . "<br>"; // 1

$c = "33";
echo gettype($c). "<br>"; // string
$c = (int)$c;
echo gettype($c). "<br>"; // integer
$c = (array)$c;
echo gettype($c). "<br>"; // 



?>

 