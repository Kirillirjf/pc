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
  <body>
    <main class="main-1">
    <?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/header.php');
include("../вспомогательные файлы/dbconnect.php");
?>
 <div class="container">
<?php
$conn = mysqli_connect("localhost", "root", "", "pc_website");
if(!$conn){
    die("Ошибка: " . mysqli_connect_error());
}

echo '<div class="container-2">';
echo '<div class="table-header">';
echo '<div class="heading">Панель администратора-редактирование закозов и пользователей</div>';
echo "<td><form action='index.php' method='post'  style='margin-left: 50px; margin-top: 8px;';>
                        <input type='submit' style='background-color: rgba(28,28,28,0); text-decoration-line: underline;   font-size: 25px;' value='удалить'>
                </form></td>";
                echo '</div>';
  echo '<div class="user">';
$sql = "SELECT * FROM users";
if($result = $conn->query($sql)){
  echo '<div class="container-2-1">';

  echo '<div class="users">';
  echo "<table><tr><th>ПОЛЬЗОВАТЕЛИ</th></tr>";
    echo "<table><tr><th>Имя</th><th>Фамили</th><th>Номер</th><th>Почта</th><th>Пароль</th><th>Изменение</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["names"] . "</td>";
            echo "<td>" . $row["surname"] . "</td>";
            echo "<td>" . $row["telephone"] . "</td>";
            echo "<td>" . $row["mail"] . "</td>";
            echo "<td>" . $row["pass"] . "</td>";
            echo "<td><a style=' margin-left: 21%; color: white; text-decoration: none;' href='redact_user.php?id=" . $row["id"] . "'>Изменить</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} 
echo '</div>';
echo '<div class="pc_card">';
$sql = "SELECT * FROM pc_card";
if($result = $conn->query($sql)){
  echo "<table><tr><th>КОМПЬЮТЕРЫ</th></tr>";
    echo "<table><tr><th>Название</th><th>цена(₽)</th><th>Изменение</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["name_pc"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
           echo "<td><a style='color: white; margin-left: 63%; text-decoration: none;' href='redact_pc.php?id=" . $row["id_pc_card"] . "'>Изменить</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} 
echo '</div>';
echo '<div class="orders">';
$sql = "SELECT * FROM orders";
if($result = $conn->query($sql)){
  echo "<table><tr><th>ЗАКАЗЫ</th></tr>";
    echo "<table><tr><th>Почта</th><th>Название</th><th>Цена(₽)</th><th>Количество</th><th>Статус</th><th>Изменение</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["mail"] . "</td>";
            echo "<td>" . $row["name_pc"] . "</td>";
            echo "<td>" . $row["total_price"] . "</td>";
            echo "<td>" . $row["total_amount"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";

           echo "<td><a style='text-decoration: none; color: white; margin-left: 19%;' href='redact_order.php?id=" . $row["order_id"] . "'>Изменить</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} 
else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
echo '</div>';
echo '</div>';
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