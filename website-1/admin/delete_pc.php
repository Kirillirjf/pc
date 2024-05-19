<?php
if(isset($_POST["id"]))
{
    $conn = new mysqli("localhost", "root", "", "pc_website");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $userid = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM pc_card WHERE id_pc_card = '$userid'";
    if($conn->query($sql)){
         
        header("Location: index.php");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();  
}
?>