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

 <!-- Типы данных -->
 
 <!-- В PHP есть десять базовых типов данных:

 boolean (логический тип true / false)
 integer (целые числа 1, 2, 3 и тд)
 float (дробные числа 5.15)
 string (строки "qwe")
 array (массивы [])
 object (объекты {})
 callable (функции)
 mixed (любой тип)
 resource (ресурсы)
 null (отсутствие значения)  -->