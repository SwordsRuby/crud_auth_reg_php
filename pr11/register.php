<?php 
$flag = true;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
}

?>

<h1>Регистрация</h1>

<form action="" method="post">

    <input type="text" name="username" placeholder="Имя пользователья" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>"><br>

    <?php
    if(isset($_POST['username'])){
        if(empty($username)){
            $flag = false;
            echo 'Имя не заполнено';
        }
    }
    ?>
    <br>
    <input type="text" name="surname" placeholder="Фамилия пользователья" value="<?= isset($_POST['surname']) ? $_POST['surname'] : '' ?>"><br>
    <?php
    if(isset($_POST['surname'])){
        if(empty($surname)){
            $flag = false;
            echo 'Фамилия не заполнена'; 
        }
    }
    ?>
    <br>
    <input type="email" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"><br>
    <?php
    if(isset($_POST['email'])){
        if(empty($email)){
            $flag = false;
            echo 'Почта не заполнена';
        }elseif(filter_var(!$email, FILTER_VALIDATE_EMAIL)){
            $flag = false;
            echo 'Email не валиден';
        }else{
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $stmt = $database->query($sql);
            $result = $stmt->fetch();

            // $result = $database->query($sql)->fetch();
            if ($result){
                echo'Пользователь с таким email уже существует';
                $flag = false;
            }
        }
    }
    ?>
    <br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <?php
    if(isset($_POST['password'])){
        if(empty($password)){
            $flag = false;
            echo 'Пароль не заполнен';
        }elseif(strlen($password) < 6){
            $flag = false;
            echo 'Пароль должен содержать более 6 символов';
        }
    }
    ?>
    <br>
    <input type="password" name="password_confirm" placeholder="Подтвеждение пароля"><br>
    <?php
    if(isset($_POST['password_confirm'])){
        if(empty($password_confirm)){
            $flag = false;
            echo 'Подтверждение пароля не заполнено';
        }
        elseif($password_confirm != $password){
            $flag = false;
            echo 'Пароли не совпадают';
    }
}
    ?>
    <br>
    <input type="submit" value="Регистрация">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($flag){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, surname, email, password) VALUES('$username', '$surname', '$email', '$password')";
            $database->query($sql);
            header("Location:/");
        }
    }
    ?>
</form>