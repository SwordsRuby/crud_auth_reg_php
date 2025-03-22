<form method="post">
    <input type="text" name="text">
</form>
<? if (isset($_POST['text'])) {
    setcookie('text', password_hash($_POST['text'], PASSWORD_DEFAULT), time() + 3600);
} ?>
<p><?= isset($_COOKIE['text']) ? $_COOKIE['text'] : ''; ?></p>
<a href="main">main</a>