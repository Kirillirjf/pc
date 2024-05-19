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
    $pcid= mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM pc_card WHERE id_pc_card = $pcid";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){

            $pcimg= $row["img"];
            $pcname= $row["name_pc"];
            $pcdesc= $row["description"];
            $pcproc= $row["processor"];
            $pcmoth= $row["the_motherboard"];
            $pcram= $row["random_access_memory"];
            $pchd= $row["hard_drive"];
            $pcpu= $row["power_unit"];
            $pcbody= $row["body"];
            $pccs= $row["cooling_system"];
            $pcprice= $row["price"];
            $pcwindows= $row["windows"];






            }

            echo " <form style='padding: 10px; border: 1px solid #ddd; border-radius: 3px; background-color: #fff; padding: 20px; max-width: 500px; margin: 0 auto; margin-top: 165px; width: 100%;'  method='post'>
            <h3>Обновление товара</h3>
            <input type='hidden' name='id_pc_card' value='$pcid' />
                    <p>Картинка:
                    <input type='text' name='img' value='$pcimg' /></p>
                    <p>Название:
                    <input type='text' name='name_pc' value='$pcname' /></p>
                    <p>Описание:
                    <input type='text' name='description' value='$pcdesc' /></p>
                    <p>Процессор:
                    <input type='text' name='processor' value='$pcproc' /></p>
                    <p>Материнская плата:
                    <input type='text' name='the_motherboard' value='$pcmoth' /></p>
                    <p>Оперативная память:
                    <input type='text' name='random_access_memory' value='$pcram' /></p>
                    <p>Жёсткий диск:
                    <input type='text' name='hard_drive' value='$pchd' /></p>
                    <p>Блок питания:
                    <input type='text' name='power_unit' value='$pcpu' /></p>
                    <p>Корпус:
                    <input type='text' name='body' value='$pcbody' /></p>
                    <p>Охлаждение:
                    <input type='text' name='cooling_system' value='$pccs' /></p>
                    <p>Цена:
                    <input type='number' name='price' value='$pcprice' /></p>
                    <p>Виндовс:
                    <input type='text' name='windows' value='$pcwindows' /></p>

                    <input type='submit' value='Сохранить'>
            </form>";
        }
        else{
            echo "<div>ПК не найден</div>";
        }
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
else {
      
    $pcid= $_POST["id_pc_card"];
    $pcimg= $_POST["img"];
    $pcname= $_POST["name_pc"];
    $pcdesc= $_POST["description"];
    $pcproc= $_POST["processor"];
    $pcmoth= $_POST["the_motherboard"];
    $pcram= $_POST["random_access_memory"];
    $pchd= $_POST["hard_drive"];
    $pcpu= $_POST["power_unit"];
    $pcbody= $_POST["body"];
    $pccs= $_POST["cooling_system"];
    $pcprice= $_POST["price"];
    $pcwindows= $_POST["windows"];

    $sql = "UPDATE pc_card SET img= '$pcimg', name_pc='$pcname', description='$pcdesc', processor='$pcproc', the_motherboard='$pcmoth', random_access_memory='$pcram',  hard_drive='$pchd', power_unit='$pcpu', body='$pcbody', cooling_system='$pccs', price='$pcprice', windows='$pcwindows' WHERE id_pc_card = $pcid";
    if($result = mysqli_query($conn, $sql)){
        header("Location: index_redactor.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
        echo $pcid, $pcimg, $pcname, $pcdesc, $pcproc, $pcmoth, $pcram, $pchd, $pcpu, $pcbody, $pccs, $pcprice, $pcwindows;
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