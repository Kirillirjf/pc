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


          </div>
<main class="menu-mains">
        <div class="cart-wow">
        <?php
            if (!isset($_SESSION['pc_card'])) {
                $_SESSION['pc_card'] = [];
                echo 'Корзина пуста';

            }

            if (isset($_GET['id_pc_card'])) {
                $productId = $_GET['id_pc_card'];
                $productName = $_GET['name_pc'];
                $productPrice = $_GET['price'];
                $productQuantity = $_GET['quantity'];
            
                // Проверяем, есть ли уже такой товар в корзине
                $productExists = false;
                foreach ($_SESSION['pc_card'] as $key => $product) {
                    if ($product['id_pc_card'] == $productId) {
                        // Товар с таким id уже есть в корзине, обновляем количество
                        if ($productQuantity > 0) {
                            $_SESSION['pc_card'][$key]['quantity'] = $productQuantity;
                        }
                        $productExists = true;
                        break;
                    }
                }
            
                if (!$productExists) {
                    // Если товара нет в корзине, добавляем его с количеством 1
                    if ($productQuantity > 0) {
                        $_SESSION['pc_card'][] = [
                            'id_pc_card' => $productId,
                            'name_pc' => $productName,
                            'price' => $productPrice,
                            'quantity' => $productQuantity
                        ];
                    }
                }


                // Выводим содержимое корзины
                echo'<div class="in-the-shopping-cart"> Товары в корзине:</div>';

                echo '<ul>';
                foreach ($_SESSION['pc_card'] as $key => $product) {
                    echo '<li><div class="c">' . $product['name_pc'] . '<div class="b">' .' Цена: ' . $product['price'] . '</div>'. '<div class="b">'.' Количество: ' . $product['quantity'] . '</div>' . '<a class="d" href="index.php?id_pc_card=' . $product['id_pc_card'] . '&name=' . $product['name_pc'] . '&price=' . $product['price'] . '&quantity=' . ($product['quantity'] + 1) . '">+ '.'</a><a class="d" href="index.php?id_pc_card=' . $product['id_pc_card'] . '&name=' . $product['name_pc'] . '&price=' . $product['price'] . '&quantity=' . max(0, $product['quantity'] - 1) . '">-</a></div></li>';
                    echo '<hr class="line-3" >';
                }
                echo '</ul>';
            


                // Подсчитываем общую сумму покупок
                $total_price = 0;
                foreach ($_SESSION['pc_card'] as $product) {
                    $total_price += $product['price'] * $product['quantity'];
                }
                $total_amount = 0;
                foreach ($_SESSION['pc_card'] as $product) {
                    $total_amount += $product['quantity'];
                }
                echo '<div class="e">'. 'Общая сумма покупок: ' . $total_price . '</div>';

                // Форма для оформления заказа
                echo ' 
                <form class="forms" method="post" action="save_order.php?name=' . $productName . ' &total_price=' . $total_price . '&total_amount=' . $total_amount . '"> 
                <input type="hidden" name="mail" value=" ' . $_SESSION["mail"] . '"required> 
                <input type="hidden" name="id" value=" ' . $_SESSION["id"] . '"required> 
                <input type="hidden" name="products" value="' . htmlspecialchars(json_encode($_SESSION['pc_card'], JSON_UNESCAPED_UNICODE)) . '"> 
                <input class="input-labell" type="submit" value="Оформить заказ"> 
                </form>';

            }

            if (isset($_POST['clear_cart'])) {
                $_SESSION['pc_card'] = [];
                echo '<div class="white">Корзина успешно очищена.</div>';
            }

            ?>
            <form class="clear" action="index.php" method="post">
                <input type="hidden" name="clear_cart" value="1">
                <button class="clear-1" type="submit"><img style="top: -3px;width:26px;height:27px;position: relative; margin-left: -139px;;" src="img/basket.png" alt="cart"> <div class="clear-2">Очистить корзину</div> </button>
            </form>
        </div>
    </main>


<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/basement.php');
?>

  </body>
</html>

