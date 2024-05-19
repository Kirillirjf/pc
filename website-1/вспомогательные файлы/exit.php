<?php
session_start();
session_unset();
session_destroy();
header("Location: ../главная стр/index.php");
?>