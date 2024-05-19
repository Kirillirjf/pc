<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-2.css">
    <title>Software Sorcerers</title>
</head>
<body>

    

<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('../главная стр/header.php');
?>



    <div class="modal-dialog">
        <div class="modal-header">
<div>
              <div class="enter">
                
            <form action= "save_user.php" method = "post" class="contacts-form">
                        <h4 class="form-title">Регистрация</h4>
                <input name = "names" type="text"  list="tel-list" required  class="input input-name" maxlength="20" placeholder="Имя">
                <input name = "surname" type="text" required class="input input-phone" list="email-list" maxlength="20" placeholder="Фамилия">
                <input name = "telephone" type="phone" pattern="7[0-9]{10}" minlength="11" maxlength="11" required class="input input-phone" list="email-list" placeholder="Телефон:79999999999">
                <input name = "mail" type="email" required class="input input-phone" list="email-list" maxlength="20" placeholder="E-mail">
                <input name = "pass" type="password" required class="input input-phone" list="email-list" maxlength="15" placeholder="Пароль">
                <div class="conference-policy">
                    <input type="checkbox" required>
                    Согласие на обработку персональных <br> данных
                </div>
                    <div class="no-akk">
<div class="no-akk-1">
есть аккаунт?
</div>
<a class="no-akk-2"  href="../authorization/index.php">
войти
</a>
                    </div>



                <button name = "submit" type="submit" class="but">Регистрация</button>
          

            </form>
                </div>
        </div>
  </div>
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



