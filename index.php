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
 