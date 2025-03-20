<?
require('database.php');

if (isset($_GET['id'])) {
  $query = 'SELECT * FROM post WHERE id_post = :id';
  $stmt = $sql->prepare($query);
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();
  $myPost = $stmt->fetch();
  if (empty($myPost)) {
    die('нет продукта по заданному id');
  }
} else {
  die('нет id');
}

if (isset($_POST['delete'])) {
  $query = 'DELETE FROM post WHERE id_post = :id_delete';
  $stmt = $sql->prepare($query);
  $stmt->bindParam(':id_delete', $_POST['id_delete']);
  $stmt->execute();
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <title>Просмотреть пост — Блог</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <header class="header">
    <div class="header-nav container">
      <div class="logo">MyBlog</div>
      <ul class="nav-list">
        <li><a href="index.php">Главная</a></li>
        <li><a href="create.php">Создать пост</a></li>
      </ul>
    </div>
  </header>

  <div class="confirm_block">
    <div class="conf_subblock">
      <form method="post">
        <h2>Вы хотите удалить данный пост?</h2>
        <input type="hidden" name="id_delete" value="<?= $myPost['id_post'] ?>">
        <input name="delete" type="submit" value="Удалить">
      </form>

      <button onclick="deleteConfirm();">Нет</button>
    </div>
  </div>

  <main class="container">
    <h1> <?= $myPost['title_post'] ?></h1>
    <p class="mb-4">
      <?= $myPost['discription_post'] ?>
    </p>

    <div class="flex mb-4">
      <a href="edit.php?<?= isset($myPost['id_post']) ? 'id=' . $myPost['id_post'] : '' ?>" class="btn">Редактировать</a>
      <button
        class="btn btn-danger"
        onclick="deleteConfirm();">
        Удалить
      </button>
    </div>

    <a href="index.php" class="btn">Вернуться на главную</a>
  </main>

  <footer class="footer">
    <p>&copy; 2025 MyBlog. Все права защищены.</p>
  </footer>
  <script src="main.js"></script>
</body>

</html>