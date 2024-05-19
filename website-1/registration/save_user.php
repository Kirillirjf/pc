<?php
session_start();
?>
<?php
if (isset($_POST['names'])) {
    $names = $_POST['names'];
}
if (isset($_POST['surname'])) {
    $surname = $_POST['surname'];
}
if (isset($_POST['telephone'])) {
    $telephone = $_POST['telephone'];
}
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
}
if (isset($_POST['pass'])) {
    $pass = $_POST['pass'];
}

if (empty($names) or empty($surname) or empty($telephone) or empty($mail) or empty($pass)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

include("../вспомогательные файлы/dbconnect.php");

// Добавляем значение "пользователь" для поля role
$result2 = $mysqli->query("INSERT INTO users (names, surname, telephone, mail, pass, role) VALUES('$names','$surname' ,'$telephone' ,'$mail','$pass', 'пользователь')");
if ($result2 === TRUE) {
    echo "Вы успешно зарегистрированы! Теперь Вы можете зайти на сайт под своим email. <a href='../главная стр/index.php'>Главная страница</a>";
} else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>