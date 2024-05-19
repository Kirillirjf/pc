<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-1.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
  <title>Software Sorcerers</title>
  </head>
  <body>
    <main class="main-1">
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

            <form action="test_user.php" method="post" class="contacts-form">
              <h4 class="form-title">Войти</h4>
              <input name="mail" type="email" list="tel-list" required class="input input-name" maxlength="20" placeholder="E-mail">
              <input name="pass" type="password" required class="input input-phone" list="email-list" maxlength="15" placeholder="Пароль">
              <div class="no-akk">
                <div class="no-akk-1">
                  нет аккаунта?
                </div>
                <a class="no-akk-2"  href="../registration/index.php">
                  зарегестрируйтесь
</a>
              </div>
              <button name="submit" type="submit" class="but">Войти</button>
            </form>
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