<?php
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = 'SELECT * FROM products WHERE id = :id';
    $stmt = $database->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $product = $stmt->fetch();

    if (!$product) {
        die('Продукта не существует');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        if (empty($name) or empty($price)) {
            echo 'Пустые поля';
        } else {
            $sql = 'UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id';
            $stmt = $database->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':id', $id);

            if ($stmt->execute()) {
                header('Location:/');
            } else {
                die('Ошибка запроса');
            }
        }
    }
}
?>

    <form method="post">
        <input type="text" name="name" value="<?=$product['name']?>" id="">
        <input type="text" name="description" value="<?=$product['description']?>" id="">
        <input type="text" name="price" value="<?=$product['price']?>" id="">
        <button>редактировать</button>
    </form>
