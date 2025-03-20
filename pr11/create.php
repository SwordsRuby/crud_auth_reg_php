<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (empty($name) or empty($price)) {
        echo 'Заполните все поля';
    } else {
        $sql = "INSERT INTO products (name, description, price) VALUES (:name, :description, :price)";
        $stmt = $database->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":price", $price);

        if ($stmt->execute()) {
            header('Location: ?page=catalog');
        }
    }
}

?>
    <form method="post">
        <input type="text" name="name" placeholder="название продукта">
        <input type="text" name="description" placeholder="описание">
        <input type="text" name="price" placeholder="цена">
        <input type="submit" value="Создать">
    </form>
