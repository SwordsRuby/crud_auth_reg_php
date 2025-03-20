<?php 

if(isset($_GET["id"]) and !empty($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $product = $stmt->fetch();

        if($product){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $sql = 'DELETE FROM products WHERE id=:id';
                $stmt = $database->prepare($sql);
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                header('Location:/');
            }
        }else{
            die('Продукт для удаления не найден');
        }
    }else{
        die("id некорректен");
    }
?>


<h1>Вы действительно хотите удалить товар - <?=$product["name"]?> ?</h1>

<form method="post">
    <a href="?page=product&id=<?=$product['id']?>">отмена</a>
    <button>Удалить</button>
</form>

