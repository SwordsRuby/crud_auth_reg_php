<?php
    if (isset($_GET['id']) and !empty($_GET['id'])) {
        $id = $_GET['id'];

        $sql = 'SELECT * FROM products WHERE id = :id';
        $stmt = $database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $product = $stmt->fetch();

        if (empty($product)) {
            include('404.php');
            return;
        }
    } else {
        include('404.php');
        return;
    }
    ?>

    <div>
        <div><?= $product['name'] ?></div>
        <div><?= $product['description'] ?></div>
        <div><?= $product['price'] ?></div>
        <a href="/?page=update&id=<?=$product['id']?>">редактировать</a>
        <a href="/?page=delete&id=<?=$product['id']?>">удалить</a>
    </div>
