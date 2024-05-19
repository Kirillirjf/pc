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
include('header.php');
?>










    <!--Swiper-->
    <div class="container-1">
        <div class="swiper projects-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide projects-slide">
                                <div class="content-swiper">
                <img src="img/PK-1swiper.png" alt="Акция" class="servicer-image">
                    <div class="text-swiper">
<div class="heading-swiper">
    <p align ="center">  НОВЫЕ МОДЕЛИ  <a class="green-text"> видеокарт rtk</a> уже готовы к заказу</p>
</div>
</div>
<div class="text-swiper-content">
    Закажите прямо сейчас. модели пк видеокарт RTX 4070.
     RTX 4060 TI и RTX 4080 SUPER уже готовы выложиться на полной только для вас!
</div>
<button class="Find-out-more-button Find-out-more-buttons">
  <a href="../cotolog/index.php" class="Find-out-more"> Узнайте больше</a>
</button>
                </div>
                <div class="project-text">
                    <div class="project-time">
                    </div>
                </div>
              </div>

                            <div class="swiper-slide projects-slide">
                                <div class="content-swiper">
                <img src="img/PK-1swiper.png" alt="Акция" class="servicer-image">
                    <div class="text-swiper">

</div>
                </div>
              </div>




            </div>
        </div>
            <div class="projects-pagination"></div>
            <hr class="line1-1" > 
          </div>
    <!--Swiper:конец раздела-->
    <div class="container-2">
      <div class="the-text-with-the-action">
        <div class="the-action">Специально для вас</div>
      </div>
      <div class="container1">



      <?php
include("../вспомогательные файлы/dbconnect.php");


$selected_ids = [7, 14, 3]; // ID карточек, которые нужно отобразить

$result = $mysqli->query("SELECT * FROM pc_card");
$k = 1;

$div = ' <div class="cards">';

foreach ($selected_ids as $id_pc_card) {
    $result = $mysqli->query("SELECT * FROM pc_card WHERE id_pc_card = $id_pc_card");
    $row = mysqli_fetch_assoc($result);


    $div .= '<div class="card">';
    $div .= ' <div class="face face1">';
    $div .= '<div class="content">';
    $div .= '<<img src= ' . $row['img'] .  ' alt="card" class="img-card-1">';
    $div .= '<div class="content-1">';
    $div .= '<div class="name-pc">' . $row['name_pc'] . '</div>';
    $div .= '<div class="pc-description">' . $row['description'] . ' </div>';
                      $div .= '</div>';

                      $div .= '</div>';
                      $div .= '</div>';
                      $div .= '<div class="face-3 face2">';
                      $div .= '<div class="content">';
                      $div .= '<div class="accessories" align="center">';
                      $div .= ' <hr class="line1-1" > ';
                      $div .= '<a class="accessories-1" >комплектующие</a> ';
                      $div .= ' </div>';
                      $div .= '<div class="types-of-components">';
                      $div .= '<div class="class-of-components">';
                      $div .= '<div class="components">';
                      $div .= ' <br>';
                      $div .= '<a class="components">Процессор:</a>';
                      $div .= '</div>';
                      $div .= '<br>'; 
                      $div .= '<div class="class-of-componentses">';
                      $div .= ' <div class="components">';
                      $div .= ' <a class="components">Видеокарта:</a>';
                      $div .= '</div>';
                      $div .= '<br>'; 
                      $div .= '<div class="components">';
                      $div .= ' <a class="components">Оперативная память:</a>';
                      $div .= '</div> ';   
                      $div .= ' </div>';
                      $div .= ' </div>';
                      $div .= '<hr class="line-3" >';
                      $div .= '<div class="class-of-components-1">';
                      $div .= ' <div class="components">';
                      $div .= '<br>';
                      $div .= ' <a class="components">' . $row['processor'] . '</a>';
                      $div .= '</div>';
                      $div .= '<br>';
                      $div .= ' <div class="components">';
                      $div .= '<a class="components">' . $row['video_card'] . '</a>';
                      $div .= '</div>';
                      $div .= '<br>';     
    $div .= '<div class="components">';
    $div .= '<a class="components">' . $row['random_access_memory'] . '</a>';
      $div .= '</div>';
      $div .= '<a class="button-2" >';
      $div .= '<button class="the-learn-more-button Find-out-more-buttons">';
      $div .= ' <a class="without-a-line-2" href="../description/index.php?id_pc_card=' . $id_pc_card . '">ПОДРОБНЕЕ</a>'; 
      $div .= ' </button>';
      $div .= '</a>';
      $div .= '</div>';
      $div .= '</div>';
      $div .= '</div>';
      $div .= '</div>';
      $div .= ' </div>';
    }
    $div .= '</div>';
    echo $div;
    ?>
      

        </div>
    </div>


    <div class="container-3">
  <hr class="line1-2" > 
  <div class="why-do-you-choose-us">
<div class="why-do-you-choose-us-1">
  <a class="text1-1">Почему именно мы?</a>
</div>
<div class="content-1">
  <div class="content-1-2">
    <img src="img/znack-1.jpg" alt="card" class="card-choose-us">
    <div class="text2-2">
      Мы - команда опытных волшебников в мире компьютерных технологий, предлагаем 
      вам <b>широкий выбор</b> качественных компьютеров и программного обеспечения.
       Наша цель - помочь вам найти идеальное решение для ваших потребностей в сфере информационных технологий. Мы стремимся
        к высочайшему уровню обслуживания и готовы ответить на все ваши вопросы в наших социальных сетях.
       Доверьтесь нашему опыту и станьте частью нашей <b>волшебной команды</b>!"
    </div>
      </div>
      <br>
  <div class="content-1-1">
    <div class="text2-1">
      Мы также предлагаем услуги по настройке и обслуживанию компьютеров,
      а также консультации по выбору оптимального программного обеспечения для ваших задач.
      Наша команда состоит из <b>профессионалов</b>, готовых решить любые технические задачи и обеспечить вас надежными решениями.
       Мы ценим каждого клиента и гарантируем индивидуальный подход к каждому проекту. Обращайтесь к нам,
      и мы сделаем вашу жизнь в мире компьютерных технологий проще и удобнее!
    </div>
      </div>
</div>


  </div>
</div>


<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('basement.php');
?>










    <script src="/js/script.js" ></script>
<script src="./js/enter.js" ></script>
<script src="js/swiper.min.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--js-->

<script src="js/wow.min.js"></script>


<script>
    var mySwiper = new Swiper ('.swiper', {
        spaceBetween: 35,
      centeredSlides: true,
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
        pagination: {
    el: '.projects-pagination',
    bulletClass: 'projects-bullet',
    bulletActiveClass: 'projects-bullet-active',
    clickable: true
  },
});


</script>
  </body>
</html>




