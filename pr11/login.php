<?php
if(isset($_SESSION['user_id'])){
    include('404.php');
    return;
}
$falg = true;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

?>

<h1>Авторизация</h1>

<form action="" method="post">
    <input type="email" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"><br>
    <?php
    if (isset($_POST['email'])) {
        if (empty($email)) {
            $flag = false;
            echo 'Почта не заполнена';
        } elseif (filter_var(!$email, FILTER_VALIDATE_EMAIL)) {
            $flag = false;
            echo 'Email не валиден';
        }
    }
    ?>
    <br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <?php
    if (isset($_POST['password'])) {
        if (empty($password)) {
            $flag = false;
            echo 'Пароль не заполнен';
        }else{
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $database->query($sql)->fetch();
            if (!$result) {
                $flag = false;
                echo "Пользователя не существует";
            }else{
                if(password_verify($password, $result['password'])){
                    $_SESSION['user_id'] = $result['id'];
                    header('Location: /');
                }else{
                    $flag = false;
                    echo 'Пароль не верный';
                }
            }
        }
    }
    ?>
    <input type="submit" value="Войти">
    <br>
</form>