<?
try {
    $sql = new PDO('mysql:host=MySQL-8.2;dbname=myBlog;charset=utf8;', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}
