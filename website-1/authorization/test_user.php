<?php
session_start();

if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
}
if (isset($_POST['pass'])) {
    $pass = $_POST['pass'];
}

if (empty($mail) || empty($pass)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

include("../вспомогательные файлы/dbconnect.php");

$result = $mysqli->query("SELECT id, mail, pass, role FROM users WHERE mail = '$mail'");
$myrow = $result->fetch_assoc();

if (empty($myrow['mail'])) {
    exit("Введенный Вами login или пароль неверный.");
} else {
    if ($myrow['pass'] == $pass) {
        $_SESSION['mail'] = $myrow['mail'];
        $_SESSION['id'] = $myrow['id'];
        $_SESSION['role'] = $myrow['role'];

        if ($myrow['role'] === 'пользователь') {
            header("Location: ../главная стр/index.php");
        } elseif ($myrow['role'] === 'админ') {
            header("Location: ../admin/index.php");
        } else {
            exit("Неизвестная роль пользователя.");
        }
    } else {
        exit("Введенный Вами login или пароль неверный.");
    }
}
?>