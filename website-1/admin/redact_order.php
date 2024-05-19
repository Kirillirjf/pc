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

?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "pc_website");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
?>
<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $orid= mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM orders WHERE order_id = '$orid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $ormail= $row["mail"];
                $orname= $row["name_pc"];
                $orprice= $row["total_price"];
                $oramount= $row["total_amount"];
                $orstatus= $row["status"];
            }
            echo " <form style='padding: 10px; border: 1px solid #ddd; border-radius: 3px; background-color: #fff; padding: 20px; max-width: 500px; margin: 0 auto; margin-top: 165px; width: 100%;'  method='post'>
            <h3>Обновление пользователя</h3>
            <input type='hidden' name='order_id' value='$orid' />
                    <p>Почта:
                    <input type='text' name='mail' value='$ormail' /></p>
                    <p>Название:
                    <input type='text' name='name_pc' value='$orname' /></p>
                    <p>Цена:
                    <input type='number' name='total_price' value='$orprice' /></p>
                    <p>Количество:
                    <input type='number' name='total_amount' value='$oramount' /></p>
                    <p>Количество:
                    <input type='text' name='status' value='$orstatus' /></p>

                    <input type='submit' value='Сохранить'>
            </form>";
        }
        else{
            echo "<div>Заказ не найден</div>";
        }
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
else {
      
    $orid= $_POST["order_id"];
    $ormail= $_POST["mail"];
    $orname= $_POST["name_pc"];
    $orprice= $_POST["total_price"];
    $oramount= $_POST["total_amount"];
    $orstatus= $_POST["status"];

    $sql = "UPDATE orders SET mail = '$ormail', name_pc = '$orname', total_price = '$orprice', total_amount = '$oramount', status = '$orstatus' WHERE order_id = '$orid'";
    if($result = mysqli_query($conn, $sql)){
        header("Location: index_redactor.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
        echo $orid, $ormail, $orprice, $orname, $oramount, $orstatus;
    }
}

mysqli_close($conn);
?>


<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/basement.php');
?>

  </body>
</html>