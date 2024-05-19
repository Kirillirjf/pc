<!DOCTYPE html>
<html lang="en">
  
  <head>
    <link rel="stylesheet" href="swiper.min.css">
    <meta charset="UTF-8" />
    <link rel = "stylesheet" href = "animate.css" >
    <link rel = "stylesheet" href = "style.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <meta charset = "utf-8">
    


  </head>
  
    <main class="main-1">
    <?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/header.php');
include("../вспомогательные файлы/dbconnect.php");
?>

<?php
$conn = new mysqli("localhost", "root", "", "pc_website");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
echo '<div class="container-2">';
echo '<div class="table-header">';
echo '<div class="heading">Панель администратора-удаление заказов и пользователей</div>';
echo "<td><form action='index_redactor.php' method='post'  style='margin-left: 50px; margin-top: 8px;';>
                        <input type='submit' style='background-color: rgba(28,28,28,0); text-decoration-line: underline; font-size: 25px;' value='Редактировать'>
                </form></td>";
                echo '</div>';
  echo '<div class="user">';
  $sql = "SELECT * FROM users";
if($result = $conn->query($sql)){
    echo '<div class="container-2-1">';

  echo '<div class="users">';
  echo "<table><tr><th>ПОЛЬЗОВАТЕЛИ</th></tr>";
  echo '</div>';
    echo "<table><tr><th>Имя</th><th>Номер</th><th>Удаление</th></tr>";
    foreach($result as $row){
        echo "<tr>";
        echo '<div class="user-1">';
            echo "<td>" . $row["names"] . "</td>";
            echo '</div>';
            echo "<td>" . $row["telephone"] . "</td>";
            echo "<td><form action='delete_user.php' method='post' style='margin-left: 67%;'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit'  value='Удалить'>
                </form></td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} 
echo '</div>';
echo '<div class="pc_card">';
$sql = "SELECT * FROM pc_card";
if($result = $conn->query($sql)){
  echo "<table><tr><th>КОМПЬЮТЕРЫ</th></tr>";
    echo "<table><tr><th>Название</th><th>цена(₽)</th><th>Удаление</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["name_pc"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td><form  action='delete_pc.php' method='post' style='margin-left: 65%;'>
                        <input type='hidden' name='id' value='" . $row["id_pc_card"] . "' />
                        <input type='submit' value='Удалить'>
                </form></td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} 
echo '</div>';
echo '<div class="orders">';
$sql = "SELECT * FROM orders";
if($result = $conn->query($sql)){
  echo "<table><tr><th>ЗАКАЗЫ</th></tr>";
    echo "<table><tr><th>Почта</th><th>Название</th><th>Цена(₽)</th><th>Количество</th><th>Статус</th><th>Удаление</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["mail"] . "</td>";
            echo "<td>" . $row["name_pc"] . "</td>";
            echo "<td>" . $row["total_price"] . "</td>";
            echo "<td>" . $row["total_amount"] . "</td>";
              echo "<td>" . $row["status"] . "</td>";
            echo "<td><form action='delete_order.php' method='post' style='margin-left: 17%;'>
                        <input type='hidden' name='id' value='" . $row["order_id"] . "' />
                        <input type='submit' value='Удалить'>
                </form></td>";
        echo "</tr>";
        echo '</div>';
    }
    echo "</table>";
    $result->free();
} 

else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
echo '</div>';
?>
    </main>
</div>
<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/basement.php');
?>

  </body>
</html>