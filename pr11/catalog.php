<?php

    $sql = 'SELECT * FROM products';
    $stmt = $database->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    ?>

    <div>
        <?php foreach($products as $product): ?>
        <div><?= $product['name']; ?></div>
        <div><?= $product['description']; ?></div>
        <div><?= $product['price']; ?></div>
        <a href="/?page=product&id=<?= $product['id']?>">Подробнее</a>
        <?php endforeach; ?>
    </div>
