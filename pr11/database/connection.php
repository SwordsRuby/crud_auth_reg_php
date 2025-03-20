<?php 
try{
    $database= new PDO("mysql:host=MySQL-8.2;dbname=store;charset=utf8", "root", "");
}catch(PDOException $error){
    die("Ошибка подключения к БД" . $error->getMessage());
}
?>