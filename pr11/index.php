<?php 
include("database/connection.php");
include("head.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php include('header.php');
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        if($page === 'product'){
            include('product.php');
        }
        elseif($page === 'update'){
            include('update.php');
        }
        elseif($page === 'delete'){
            include('delete.php');
        }elseif($page === 'login'){
            include('login.php');
        }elseif($page === 'register'){
            include('register.php');
        }
        else{
            include('404.php');
        }
    }else{
        include('catalog.php');
    }
    ?>
</body>
</html>