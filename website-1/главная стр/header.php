<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <link rel = "stylesheet" href = "style.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<div class="container">
          <div class="section">
          <a href="../главная стр/index.php">
              <header class="header">
          <img src="../главная стр/img/лого.png" alt="logo" class="logo">
          <div class="blocks-2 ">
</a>    
<div class="header-number">
  <div class="without-a-line-1">7-777-777-77-77</div>
  <div class="button-1">
    <img src="../главная стр/img/mark.png" alt="" class="mark">
    <span><div class="without-a-line-1">Г. Озёры</div></span>
</div>



</div>
   <hr class="line-1" > 

      
   <div class="blocks-1">      
          <button class="button button-primary">
            <span"><a href="../cotolog/index.php" class="without-a-line">Каталог</a></span>
        </button>
        <button class="button button-primarys">
            <span><a href="../оо нас/index.php" class="without-a-line">О нас</a> </span>
          </button>
          
          <?php
          session_start();
          include("../вспомогательные файлы/dbconnect.php");
          // Проверяем, пусты ли переменные логина и id пользователя
          if (empty($_SESSION['mail'])) {
            ?>
            <button class="button button-primarys">
            <span><a href="../authorization/index.php" class="without-a-line">Войти</a> </span>
          </button>
            <?php
          } else {
            ?>
                     <button class="button">
            <span class="name-on-top">           
               <?php
            echo '<a class="nama"> '. $_SESSION["mail"] . '</a>';
              ?>
              </span>
                     </button>
            <button class="button button-primarys">
            <span class="name-on-top">

              <a href="../вспомогательные файлы/exit.php" class="without-a-line-1-1">Выход</a>
              </span>
          </button>
          
            <?php }?>

        </div>  
          
        </div>  

</header>
</div>
</div>


  