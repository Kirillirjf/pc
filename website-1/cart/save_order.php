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
        <?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/header.php');
include("../вспомогательные файлы/dbconnect.php");
?>

    <main class="main-1">

<?php
session_start();

if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
?>
<main class="menu-mains">
    
    <div class="dialog">
    <?php
            $mail = $_POST['mail'];
            $id = $_POST['id'];
            $total_amount = $_GET['total_amount'];
            $total_price = $_GET['total_price'];
            $pc_card_json = htmlspecialchars(json_encode($_SESSION['pc_card'], JSON_UNESCAPED_UNICODE));

            // Здесь можно обработать данные, например, сохранить в базе данных или отправить на почту
            foreach ($_SESSION['pc_card'] as $card) {
                $kod = $card['id_pc_card'];
                $kod_1 = $card['name_pc'];
                $result2 = $mysqli->query("INSERT INTO orders (id_pc_card, mail, id, name_pc, total_price, total_amount, status) VALUES ('$kod','$mail', '$id', '$kod_1', '$total_price', '$total_amount', 'в ожидании')");
            }
            if ($result2 === TRUE) {
                echo '<div class="boxih">';
                echo '<p class="litter-s">Заказ успешно оформлен!</p><br>';
                echo '<p class="litter">Самовывоз по адресу: Мск об, Озеры, ул. Свердлова д. 120</p><br>';
                echo '<p class="litter">Количество товаров: ' . $total_amount . '</p><br>';
                echo '<p class="litter">Ваш заказ:</p><br>';
                foreach ($_SESSION['pc_card'] as $card) {
                    echo '<p class="litter">' . $card['name_pc'] . ' количество: ' . $card['quantity'] . '</p><br>';
                }
                echo '<p class="litter">Сумма заказа составляет: ' . $total_price . '₽</p><br>';
                echo '</div>';
            } 
            else {
                echo 'Ошибка при сохранении заказа: ';
                print_r($pc_card['name_pc']);
            }

        ?>
    </div>
</main>
</main>


<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/basement.php');
unset($_SESSION['pc_card']);
exit;
?>

  </body>
</html>