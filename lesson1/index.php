
  
<?php
/*
PHP - это серверный скриптовый язык программирования с открытым исходным кодом. PHP специально сконструирован для веб-разработок с возможностью внедрения кода в HTML.
Примеры использования PHP:
-Обработка форм
-Автоматическая генерация html стр.
Переменная - это временное хранилище, контейнер, в котором можно хранить какое-либо значение.
Регистрозависимы $name и $Name - разные переменные
*/

$userName; //Camel case
$user_name; //Snake case

$name = "Jack";
$century = 20;
echo $name;
echo 'Hello world! <br>';  
echo 'Hello $name <br>';  
echo "Hello $name <br>";
echo 'Сумма чисел: 3 + 2 = '. 3+2 . "<br>";
echo "$name was born in the {$century}th century<br>";//Явно указываем на перменную
$century=30;
echo "name - ", $name, "century - ", $century,"<br>";

                                        
//Иногда возникает необходиомость в строке выводить кавычки
echo "<br>";
echo "company 'Blizzard Entertainment'<br>";
echo 'company "Blizzard Entertainment"<br>';
echo "company \"Blizzard Entertainment\"<br>"; 


?>
<div>
    <span>Текущая дата: <?=date('d.m.Y H:i:s');?> г.</span>   /
</div>


<?php
//КОНСТАНТА - хранит значение, но в отличии от переменной это значение может быть заданно только 1 раз
define ("DB_LOGIN", "root"); 
echo DB_LOGIN . "<br>";
//МАССИВ - это упорядоченные наборы данных, представляющие собой список однотипных элементов.
define ('COLORS',['red','green','blue']); // c php 7 можно создать константу массив
echo COLORS[0] . "<br>";
echo defined('COLORS') . "<br>";  // Проверка существует ли константа 1 или 0


echo "Встроенные константы<br>";
echo __DIR__,"<br>";
echo __FILE__,"<br>";
echo __LINE__,"<br>";
echo PHP_VERSION,"<br>";
error_reporting(E_ALL);

//Задание вывести предложение : Меня зовут (имя), мне (возраст) лет, я из города (Контстанта-город); в конце перенос строки br
//Записать весь текст в переменную $text = ..
//Создать константу цвета и вндерить ее в стиль параграфа в Html (<p style=color:###>Текс из прошлого задания</p>)