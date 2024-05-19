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










<div class="container-2">



<?php
include("../вспомогательные файлы/dbconnect.php");
          $label = 'id_pc_card';
          $id_pc_card = false;
          if (!empty($_GET[$label])) {
            $id_pc_card = $_GET[$label];
          }
          $result = $mysqli->query("SELECT * FROM pc_card WHERE id_pc_card = '$id_pc_card'");

          $row = $result->fetch_assoc();

          $id_pc_card = $row['id_pc_card'];


          echo  '  <div class="img-pc">'; 
          echo  '<img src = ' . $row['img'] . ' class="img-pc-1">';
          echo '</div>';

          echo  '  <div class="description-pc">'; 
          echo  ' <a class="name-pcs" >' . $row['name_pc'] .   '</a>'; 
          echo  '  <div class="description-1">'; 
          echo  ' <a class="description-pc-1" >' . $row['description'] .   '</a>'; 
          echo  '</div>';




          echo '  <div class="components">'; 

          echo '  <div class="components-three">'; 
          echo '  <div class="components-1">'; 
          echo '<img src="../description/img/video_card.png" class="img-components">';
          echo '  <div class="name-components">'; 
          echo '  <a class="name-components-1"> видеокарта </a>';
          echo ' <a class="video_card-style-1" >' . $row['video_card'] .   '</a>'; 
          echo '</div>';
          echo '</div>';

          echo '  <div class="components-1">'; 
          echo '<img src="../description/img/processor.png" class="img-components">';
          echo '  <div class="name-components">'; 
          echo '  <a class="name-components-1"> процессор </a>';
          echo ' <a class="video_card-style-1" >' . $row['processor'] .   '</a>'; 
          echo '</div>';
          echo '</div>';

          echo '  <div class="components-1">'; 
          echo '<img src="../description/img/random_access_memory	.png" class="img-components">';
          echo '  <div class="name-components">'; 
          echo '  <a class="name-components-1"> оперативная авмять </a>';
          echo ' <a class="video_card-style-1" >' . $row['random_access_memory'] .   '</a>'; 
          echo '</div>';
          echo '</div>';
          echo '</div>';





          echo '  <div class="components-three-1">'; 
          echo '  <div class="components-1">'; 
          echo '<img src="../description/img/the_motherboard.png" class="img-components">';
          echo '  <div class="name-components">'; 
          echo '  <a class="name-components-1"> материнская плата </a>';
          echo ' <a class="video_card-style-1" >' . $row['the_motherboard'] .   '</a>'; 
          echo '</div>';
          echo '</div>';

          echo '  <div class="components-1">'; 
          echo '<img src="../description/img/hard_drive.png" class="img-components">';
          echo '  <div class="name-components">'; 
          echo '  <a class="name-components-1"> SSD накопитель </a>';
          echo ' <a class="video_card-style-1" >' . $row['hard_drive'] .   '</a>'; 
          echo '</div>';
          echo '</div>';

          echo '  <div class="components-2">'; 
          echo '<img src="../description/img/	cooling_system.png" class="img-components-1">';
          echo '  <div class="name-components">'; 
          echo '  <a class="name-components-1"> охлаждение </a>';
          echo ' <a class="video_card-style-1" >' . $row['cooling_system'] .   '</a>'; 
          echo '</div>';
          echo '</div>';
          echo '</div>';












          echo '  <div class="components-three-1">'; 
          echo '  <div class="components-1">'; 
          echo '<img src="../description/img/power_unit.png" class="img-components">';
          echo '  <div class="name-components-3">'; 
          echo '  <a class="name-components-1"> блок питания </a>';
          echo ' <a class="video_card-style-1" >' . $row['power_unit'] .   '</a>'; 
          echo '</div>';
          echo '</div>';

          echo '  <div class="components-1">'; 
          echo '<img src="../description/img/body.png" class="img-components-2">';
          echo '  <div class="name-components-4">'; 
          echo '  <a class="name-components-1"> корпус </a>';
          echo ' <a class="video_card-style-1" >' . $row['body'] .   '</a>'; 
          echo '</div>';
          echo '</div>';

          echo '  <div class="components-2">'; 
          echo '<img src="../description/img/Windows.png" class="img-components-3">';
          echo '  <div class="name-components-2">'; 
          echo '  <a class="name-components-1">операционная система </a>';
          echo ' <a class="video_card-style-1" >' . $row['windows'] .   '</a>'; 
          echo '</div>';
          echo '</div>';

          echo '</div>';












          echo '</div>';




          

          echo '<hr class="line-3" >';
          echo '  <div class="messages">'; 
          echo '  <div class="messages-1">'; 
          echo '<img src="../description/img/dostavka.png" class="img-components-2">';
          echo '  <div class="name-components">'; 
          echo '  <a class="name-components-1"> самовывоз </a>';
          echo ' <a class="dostavka" >Мск об, Озеры, ул. Свердлова д. 120</a>'; 
          echo '</div>';
          echo '</div>';

          
          echo '  <div class="messages-2">'; 
          echo '<img src="../description/img/vopros.png" class="img-components-2">';
          echo '  <div class="name-components">'; 
          echo '  <a class="name-components-1"> возник вопрос? </a>';
          echo ' <a class="dostavka" href="https://vk.com/id506546894">напишите нам в соц. сетях</a>'; 
          echo '</div>';
          echo '</div>';
          echo '</div>';
          if (empty($_SESSION['mail'])) {
            echo '<a href="../authorization/index.php"><button class="the-learn-more-button">';
            echo '  <img src="../главная стр/img/basket.png" class="basket-2">';
            echo '  <div class="without-a-line-2">' . $row['price'] . ' ₽</div>';
            echo '</button></a>';
        } else {
            echo '<a href="../cart/method.php?id_pc_card=' . $id_pc_card . ' &name_pc=' . $row['name_pc'] . '&price=' . $row['price'] . '"><button class="the-learn-more-button">';
            echo '  <img src="../главная стр/img/basket.png" class="basket-2">';
            echo '  <div class="without-a-line-2">' . $row['price'] . ' ₽</div>';
            echo '</button></a>';
        }

          echo '</div>';
          echo '</div>';

          echo '</div>';
          echo $div;
          ?>


</div>





<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/basement.php');
?>

  </body>
</html>




