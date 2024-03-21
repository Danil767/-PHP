 <!-- Hello World на PHP -->

 <?php
  echo "Hello World"
  ?>
 <br>

 <!-- title html -->

 <title><?= "Новая страница" ?></title>

 <!-- DATE -->

 <?php
  echo "Текущая дата и время";
  echo date(DATE_RSS);
  ?>
 <br>

 <!-- if / else -->

 <?php
  if (mt_rand(0, 1)) {
  ?>
   <div style="color: blue">Синий</div>
 <?php
  } else {
  ?>
   <div style="color: red">Красный</div>
 <?php
  }
  ?>
 <br>

 <!-- Комментарии -->

 <?php
  # Комментарий №1
  // Комментарий №2
  /* Комментарий №3 */
  ?>

 <!-- Подключение файла -->

 <?php
  echo 'Главный текст <br>';
  include 'second.php';
  echo 'Главный текст <br>';
  ?>
 <br>

 <!-- Переменные -->

 <?php
  $qwe_qwe = 9;
  echo $qwe_qwe;
  ?>
 <br>

 <!-- Типы данных -->

 <!-- В PHP есть десять базовых типов данных:

 boolean (логический тип true / false)
 integer (целые числа 1, 2, 3 и тд)
 float (дробные числа 5.15)
 string (строки "qwe / $название__переменной", \"$название__переменной\", 'qwe' `команда-OS`)
 array (массивы [])
 object (объекты {})
 callable (функции)
 mixed (любой тип)
 resource (ресурсы)
 null (отсутствие значения)  -->


 <!-- Базовые функции языка -->

 <?php
  $user = "Dan";
  if (isset($user))
    echo "Переменная существует";
  else
    echo "Переменная не существует";
  ?>
 <br>

 <?php
  $str = "";
  if (empty($str))
    echo "Строка пустая";
  else
    echo "В строке что то есть";
  ?>
 <br>

 <!-- Узнаём тип переменной  -->

 <?php
  $qaz = "Leo";
  echo gettype($qaz)
  ?>
 <br>

 <!-- Проверка принадлежности к какому-то конкретному типу -->

 <?php
  if (is_int(4))
    echo "Это число";
  else
    echo "Это не число";
  ?>
 <br>

 <!-- Явное и неявное приведение типов -->

 <?php
  $str = '22,5';
  $number = $str - 10;
  echo $number
  ?>
 <br>

 <?php
  $myStr = '22,5qwerty';
  $number = $myStr - 10;
  echo $number
  ?>
 <br>

 <?php
  echo true // 1
  ?>
 <br>

 <?php
  echo false // пустая строка 
  ?>
 <br>

 <?php
  $float = 4.3;
  $number = (int)$float;
  echo $number
  ?>
 <br>

 <?php
  $num = 24;
  $f = (float)($num / 2) - (int)($num / 2);
  if ($f) {
    echo 'Число нечётное';
  } else {
    echo 'Число четное';
  }
  ?>
 <br>

 <!-- Округление чисел -->

 <?php
  echo round(21.4356767, 2); // 21.44
  ?>
 <br>

 <!-- ООП: Классы и объекты -->

 <?php
  require 'point.php';
  $point1 = new Point();
  $point1->x = 13;
  $point1->y = 2;
  echo $point1->x;

  $point2 = new Point();
  $point2->x = 11;
  $point2->y = 42;
  echo $point2->x;

  unset($point2) //удаление объекта
  ?>
 <br>

 <!-- Области видимости переменных класса -->

 <!-- public - переменная доступна снаружи и внутри -->
 <!-- private - переменная доступна внутри класса, но не снаружи -->
 <!-- protected - позволяет создать однотипные классы на базе уже готовых. Дочерний класс от основного класса, но с большим колличеством возможностей. -->

 <!-- clone - используется чтобы склонировать объект. -->

 <?php
  $first = $second = 2;
  $first = 3;
  echo $first . '<br>' . $second
  ?>
 <br>

 <?php
  require 'point1.php';

  $fi = new Point1;

  $fi->x = 3;
  $fi->y = 3;

  $se = $fi;
  $se->x = 5;
  $se->y = 5;

  echo "x: {$se->x}, y: {$se->y}";
  ?>
 <br>

 <!-- Переменные можно делать ссылками -->
 <?php
  $a = 5;
  $b = &$a;
  $b = 3;
  echo $a
  ?>
 <br>

 <!-- Константы -->

 <?php
  // Можно также с помошью if проверять создание константы

  define('NUMBER', 77);
  echo NUMBER; // или echo constant('NUMBER'); динамическое имя константы
  ?>
 <br>

 <?php
  $num = mt_rand(1, 10);
  $name = "VALUE($num)";
  define($name, $num);
  echo constant($name);
  ?>
 <br>

 <?php
 echo 'Имя файла' . __FILE__ . '<br>';
 echo 'Строка' . __LINE__ . '<br>'
  ?>
 <br>