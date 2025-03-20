<?
require('database.php');

if (isset($_GET['id'])) {
  $query = 'SELECT * FROM post WHERE id_post = :id';
  $stmt = $sql->prepare($query);
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();
  $myPost = $stmt->fetch();
  if (empty($myPost)){
    die('нет продукта по заданному id');
  }
} else {
  die('нет id');
}

if (isset($_POST['title'])) {
  $query = 'UPDATE post SET title_post = :title, discription_post = :content WHERE id_post = :id';
  $stmt = $sql->prepare($query);
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->bindParam(':title', $_POST['title']);
  $stmt->bindParam(':content', $_POST['content']);
  $stmt->execute();
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <title>Редактировать пост — Блог</title>
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

  <main class="container">
    <h1>Редактировать пост</h1>

    <form method="post">
      <div class="form-group">
        <label for="post_title">Заголовок</label>
        <input
          type="text"
          id="post_title"
          name="title"
          class="form-control"
          value="<?= $myPost['title_post'] ?>" />
      </div>

      <div class="form-group">
        <label for="post_content">Содержание</label>
        <textarea
          id="post_content"
          name="content"
          class="form-control"
          rows="6"><?= $myPost['discription_post'] ?></textarea>
      </div>

      <button type="submit" class="btn">Сохранить изменения</button>
    </form>
  </main>

  <footer class="footer">
    <p>&copy; 2025 MyBlog. Все права защищены.</p>
  </footer>
</body>

</html>