<?php
$mysqli = new mysqli('localhost', 'root', '', 'pc_website');
if ($mysqli->connect_error) {
    die(' Connect Error (' .$mysqli->connect_errno. ') ' .$mysqli->connect_error);
}
?>