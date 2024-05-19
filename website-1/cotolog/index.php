<!DOCTYPE html>
<html lang="en">
  
  <head>
    <link rel="stylesheet" href="swiper.min.css">
    <meta charset="UTF-8" />
    <link rel = "stylesheet" href = "animate.css" >
    <link rel = "stylesheet" href = "style.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Software Sorcerers</title>
    <meta charset = "utf-8">
    


  </head>
  <body>
    <main class="main-1">
    <?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/header.php');
?>




<div class="container-2-1">
  <div class="the-text-with-the-action">
    <div class="the-action">Новинки</div>
  </div>

  <?php
include("../вспомогательные файлы/dbconnect.php");


$selected_ids = [15, 20, 9, 7]; // ID карточек, которые нужно отобразить

$result = $mysqli->query("SELECT * FROM pc_card");
$k = 1;

$div = ' <div class="cards">';
foreach ($selected_ids as $id_pc_card) {
    $result = $mysqli->query("SELECT * FROM pc_card WHERE id_pc_card = $id_pc_card");
    $row = mysqli_fetch_assoc($result);

    $div .= ' <div class="fons">';
    $div .= '  <div class="img-card">';
    $div .= '<img src= ' . $row['img'] .  ' class="img-card-1">';
    $div .= '</div>';
    $div .= '  <hr class="line-2" > ';
   $div .= ' <div class="info">';
   $div .= '<div class="name-pc" align="center">';
   $div .= ' <a class="name-pc-1" >' . $row['name_pc'] .   '</a>'; 
   $div .= '</div>';
   $div .= ' <div class="accessories" align="center">'; 
   $div .= '<a class="accessories-1" >комплектующие</a> '; 
   $div .= '</div>';
   $div .= '<div class="types-of-components">'; 
   $div .= ' <div class="class-of-components">'; 
   $div .= '  <div class="components">'; 
   $div .= '<br>'; 
   $div .= '   <a class="components">Процессор:</a>'; 
   $div .= '</div>';
   $div .= '<br>'; 
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">Видеокарта:</a>'; 
   $div .= '</div>';
   $div .= '<br>'; 
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">материнская плата:</a>'; 
   $div .= '</div>';
   $div .= '<br>';    
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">Оперативная память:</a>'; 
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">SSD:</a>'; 
   $div .= '</div>';
   $div .= '</div>';
   $div .= '<hr class="line-3" >';
   $div .= '<div class="class-of-components">';
   $div .= '  <div class="components">'; 
   $div .= '<br>';  
   $div .= '  <a class="components">' . $row['processor'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';   
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['video_card'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['the_motherboard'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['random_access_memory'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';      
   $div .= '  <div class="components">';
   $div .= '  <a class="components">' . $row['hard_drive'] . '</a>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '<a class="button-2" href="../description/index.php?id_pc_card=' . $id_pc_card . '">';
   $div .= ' <button class="the-learn-more-button">';
   $div .= '<div  class="without-a-line-2">ПОДРОБНЕЕ</div> ';
   $div .= ' </button>';
   $div .= '</a>';
   $div .= '</div>';
    
}
$div .= '</div>';
echo $div;
?>
  </div> 
</div>





<div class="container-2">
  <div class="the-text-with-the-action">
    <div class="the-action">Игровые компьютеры</div>
  </div>

  <?php
include("../вспомогательные файлы/dbconnect.php");


$selected_ids = [1, 19, 3, 4, 5, 6, 7, 16, 17, 18, 2, 20]; // ID карточек, которые нужно отобразить

$result = $mysqli->query("SELECT * FROM pc_card");
$k = 1;

$div = ' <div class="cards">';
foreach ($selected_ids as $id_pc_card) {
    $result = $mysqli->query("SELECT * FROM pc_card WHERE id_pc_card = $id_pc_card");
    $row = mysqli_fetch_assoc($result);
    

       $div .= ' <div class="fons">';
 $div .= '  <div class="img-card">';
 $div .= '<img src= ' . $row['img'] .  ' class="img-card-1">';
 $div .= '</div>';
 $div .= '  <hr class="line-2" > ';
$div .= ' <div class="info">';
$div .= '<div class="name-pc" align="center">';
$div .= ' <a class="name-pc-1" >' . $row['name_pc'] .   '</a>'; 
$div .= '</div>';
$div .= ' <div class="accessories" align="center">'; 
$div .= '<a class="accessories-1" >комплектующие</a> '; 
$div .= '</div>';
$div .= '<div class="types-of-components">'; 
$div .= ' <div class="class-of-components">'; 
$div .= '  <div class="components">'; 
$div .= '<br>'; 
$div .= '   <a class="components">Процессор:</a>'; 
$div .= '</div>';
$div .= '<br>'; 
$div .= '  <div class="components">'; 
$div .= '   <a class="components">Видеокарта:</a>'; 
$div .= '</div>';
$div .= '<br>'; 
$div .= '  <div class="components">'; 
$div .= '   <a class="components">материнская плата:</a>'; 
$div .= '</div>';
$div .= '<br>';    
$div .= '  <div class="components">'; 
$div .= '   <a class="components">Оперативная память:</a>'; 
$div .= '</div>';
$div .= '<br>';     
$div .= '  <div class="components">'; 
$div .= '   <a class="components">SSD:</a>'; 
$div .= '</div>';
$div .= '</div>';
$div .= '<hr class="line-3" >';
$div .= '<div class="class-of-components">';
$div .= '  <div class="components">'; 
$div .= '<br>';  
$div .= '  <a class="components">' . $row['processor'] . '</a>';
$div .= '</div>';
$div .= '<br>';   
$div .= '  <div class="components">'; 
$div .= '  <a class="components">' . $row['video_card'] . '</a>';
$div .= '</div>';
$div .= '<br>';     
$div .= '  <div class="components">'; 
$div .= '  <a class="components">' . $row['the_motherboard'] . '</a>';
$div .= '</div>';
$div .= '<br>';     
$div .= '  <div class="components">'; 
$div .= '  <a class="components">' . $row['random_access_memory'] . '</a>';
$div .= '</div>';
$div .= '<br>';      
$div .= '  <div class="components">';
$div .= '  <a class="components">' . $row['hard_drive'] . '</a>';
$div .= '</div>';
$div .= '</div>';
$div .= '</div>';
$div .= '</div>';
$div .= '<a class="button-2" href="../description/index.php?id_pc_card=' . $id_pc_card . '">';
$div .= ' <button class="the-learn-more-button">';
$div .= '<div  class="without-a-line-2">ПОДРОБНЕЕ</div> ';
$div .= ' </button>';
$div .= '</a>';
$div .= '</div>';
    
}
$div .= '</div>';
echo $div;
?>
  </div> 
</div>



<div class="container-2-1">
  <div class="the-text-with-the-action">
    <div class="the-action">Рабочии станции</div>
  </div>

  <?php
include("../вспомогательные файлы/dbconnect.php");


$selected_ids = [9, 8, 10, 11]; // ID карточек, которые нужно отобразить

$result = $mysqli->query("SELECT * FROM pc_card");
$k = 1;

$div = ' <div class="cards">';
foreach ($selected_ids as $id_pc_card) {
    $result = $mysqli->query("SELECT * FROM pc_card WHERE id_pc_card = $id_pc_card");
    $row = mysqli_fetch_assoc($result);

    $div .= ' <div class="fons">';
    $div .= '  <div class="img-card">';
    $div .= '<img src= ' . $row['img'] .  ' class="img-card-1">';
    $div .= '</div>';
    $div .= '  <hr class="line-2" > ';
   $div .= ' <div class="info">';
   $div .= '<div class="name-pc" align="center">';
   $div .= ' <a class="name-pc-1" >' . $row['name_pc'] .   '</a>'; 
   $div .= '</div>';
   $div .= ' <div class="accessories" align="center">'; 
   $div .= '<a class="accessories-1" >комплектующие</a> '; 
   $div .= '</div>';
   $div .= '<div class="types-of-components">'; 
   $div .= ' <div class="class-of-components">'; 
   $div .= '  <div class="components">'; 
   $div .= '<br>'; 
   $div .= '   <a class="components">Процессор:</a>'; 
   $div .= '</div>';
   $div .= '<br>'; 
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">Видеокарта:</a>'; 
   $div .= '</div>';
   $div .= '<br>'; 
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">материнская плата:</a>'; 
   $div .= '</div>';
   $div .= '<br>';    
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">Оперативная память:</a>'; 
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">SSD:</a>'; 
   $div .= '</div>';
   $div .= '</div>';
   $div .= '<hr class="line-3" >';
   $div .= '<div class="class-of-components">';
   $div .= '  <div class="components">'; 
   $div .= '<br>';  
   $div .= '  <a class="components">' . $row['processor'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';   
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['video_card'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['the_motherboard'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['random_access_memory'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';      
   $div .= '  <div class="components">';
   $div .= '  <a class="components">' . $row['hard_drive'] . '</a>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '<a class="button-2" href="../description/index.php?id_pc_card=' . $id_pc_card . '">';
   $div .= ' <button class="the-learn-more-button">';
   $div .= '<div  class="without-a-line-2">ПОДРОБНЕЕ</div> ';
   $div .= ' </button>';
   $div .= '</a>';
   $div .= '</div>';
    
}
$div .= '</div>';
echo $div;
?>
  </div> 
</div>



<div class="container-2-1">
  <div class="the-text-with-the-action">
    <div class="the-action-1">Компьютеры для дома</div>
  </div>

  <?php
include("../вспомогательные файлы/dbconnect.php");


$selected_ids = [12, 13, 14, 15]; // ID карточек, которые нужно отобразить

$result = $mysqli->query("SELECT * FROM pc_card");
$k = 1;

$div = ' <div class="cards">';
foreach ($selected_ids as $id_pc_card) {
    $result = $mysqli->query("SELECT * FROM pc_card WHERE id_pc_card = $id_pc_card");
    $row = mysqli_fetch_assoc($result);

    $div .= ' <div class="fons">';
    $div .= '  <div class="img-card">';
    $div .= '<img src= ' . $row['img'] .  ' class="img-card-1">';
    $div .= '</div>';
    $div .= '  <hr class="line-2" > ';
   $div .= ' <div class="info">';
   $div .= '<div class="name-pc" align="center">';
   $div .= ' <a class="name-pc-1" >' . $row['name_pc'] .   '</a>'; 
   $div .= '</div>';
   $div .= ' <div class="accessories" align="center">'; 
   $div .= '<a class="accessories-1" >комплектующие</a> '; 
   $div .= '</div>';
   $div .= '<div class="types-of-components">'; 
   $div .= ' <div class="class-of-components">'; 
   $div .= '  <div class="components">'; 
   $div .= '<br>'; 
   $div .= '   <a class="components">Процессор:</a>'; 
   $div .= '</div>';
   $div .= '<br>'; 
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">Видеокарта:</a>'; 
   $div .= '</div>';
   $div .= '<br>'; 
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">материнская плата:</a>'; 
   $div .= '</div>';
   $div .= '<br>';    
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">Оперативная память:</a>'; 
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '   <a class="components">SSD:</a>'; 
   $div .= '</div>';
   $div .= '</div>';
   $div .= '<hr class="line-3" >';
   $div .= '<div class="class-of-components">';
   $div .= '  <div class="components">'; 
   $div .= '<br>';  
   $div .= '  <a class="components">' . $row['processor'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';   
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['video_card'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['the_motherboard'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';     
   $div .= '  <div class="components">'; 
   $div .= '  <a class="components">' . $row['random_access_memory'] . '</a>';
   $div .= '</div>';
   $div .= '<br>';      
   $div .= '  <div class="components">';
   $div .= '  <a class="components">' . $row['hard_drive'] . '</a>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '</div>';
   $div .= '<a class="button-2" href="../description/index.php?id_pc_card=' . $id_pc_card . '">';
   $div .= ' <button class="the-learn-more-button">';
   $div .= '<div  class="without-a-line-2">ПОДРОБНЕЕ</div> ';
   $div .= ' </button>';
   $div .= '</a>';
   $div .= '</div>';
    
}
$div .= '</div>';
echo $div;
?>
  </div> 
</div>




<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/basement.php');
?>

  </body>
</html>




