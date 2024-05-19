<?php
if(isset($_POST["id"]))
{
    $conn = new mysqli("localhost", "root", "", "pc_website");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $ordid = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM orders WHERE order_id = '$ordid'";
    if($conn->query($sql)){
         
        header("Location: index.php");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();  
}
?>