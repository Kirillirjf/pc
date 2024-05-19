<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Sorcerers</title>
</head>

<body>
    <?php
    session_start();

    // Проверяем, существует ли массив корзины в сессии, если нет - создаем его 
    if (!isset($_SESSION['pc_card'])) {
        $_SESSION['pc_card'] = [];
    }

    // Проверяем, был ли передан ID товара для добавления в корзину 
    if (isset($_GET['id_pc_card'])) {
        $pc_cardId = $_GET['id_pc_card'];
        $pc_cardName = $_GET['name_pc'];
        $pc_cardPrice = $_GET['price'];

        // Добавляем ID товара в массив корзины 
        $_SESSION['pc_card'][] = ['id_pc_card' => $pc_cardId, 'name_pc' => $pc_cardName ,'price' => $pc_cardPrice];

        echo 'Товар ' . $pc_cardName . ' успешно добавлен в корзину!';
        
    } else {
        echo 'Товар не найден';
    }

    // Выводим содержимое корзины 
    echo 'Товары в корзине: ';
    echo '<pre>';
    print_r(end($_SESSION['pc_card'])['name_pc']); // Исправлено на 'name_pc'
    echo '</pre>';
    echo '<a onclick="location.reload(), " href="index.php?id_pc_card=' . $pc_cardId . '&name_pc=' . $pc_cardName .'&price=' . $pc_cardPrice.'"> Хорошо! </a>';
    
    ?>
</body>

</html>