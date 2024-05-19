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
    $userid= mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM users WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $username= $row["names"];
                $usersurname= $row["surname"];
                $usertelephone= $row["telephone"];
                $usermail= $row["mail"];
                $userpass= $row["pass"];
            }


            echo " <form style='padding: 10px; border: 1px solid #ddd; border-radius: 3px; background-color: #fff; padding: 20px; max-width: 500px; margin: 0 auto; margin-top: 165px; width: 100%;'  method='post'>
                <h3>Обновление пользователя</h3>
                    <input type='hidden' name='id' value='$userid' />
                    <p> <a style='font-size: 17px;'>Имя:<a>
                    <input type='text' name='name' value='$username' /></p>
                    <p><a style='font-size: 17px;'>Фамилия:<a>
                    <input type='text' name='surname' value='$usersurname' /></p>
                    <p><a style='font-size: 17px;'>Номер:<a>
                    <input type='text' name='telephone' value='$usertelephone' /></p>
                    <p><a style='font-size: 17px;'>Почта:<a>
                    <input type='text' name='mail' value='$usermail' /></p>
                    <p><a style='font-size: 17px;'>Пароль:<a>
                    <input type='text' name='pass' value='$userpass' /></p>

                    <input type='submit' value='Сохранить'>
            </form>";
        }
        else{
            echo "<div>Пользователь не найден</div>";
        }
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
else {
      
    $userid= $_POST["id"];
    $username= $_POST["name"];
    $usersurname= $_POST["surname"];
    $usertelephone= $_POST["telephone"];
    $usermail= $_POST["mail"];
    $userpass= $_POST["pass"];

    $sql = "UPDATE users SET names = '$username', surname = '$usersurname', telephone = $usertelephone, mail = '$usermail', pass = '$userpass' WHERE id = $userid";
    if($result = mysqli_query($conn, $sql)){
        header("Location: index_redactor.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
        echo $userid, $usersurname, $usertelephone, $usermail, $userpass;
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