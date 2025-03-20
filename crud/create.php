<?
require('database.php');

if (isset($_POST['title'])) {
  $query = "INSERT INTO post (title_post, discription_post) VALUES (:title, :content)";
  $stmt = $sql->prepare($query);
  $stmt->bindParam(':title', $_POST['title']);
  $stmt->bindParam(':content', $_POST['content']);
  $stmt->execute();
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <title>Создать пост — Блог</title>
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
    <h1>Создать новый пост</h1>

    <form method="post">
      <div class="form-group">
        <label for="post_title">Заголовок</label>
        <input
          required
          type="text"
          id="post_title"
          name="title"
          class="form-control"
          placeholder="Введите заголовок" />
      </div>

      <div class="form-group">
        <label for="post_content">Содержание</label>
        <textarea
          required
          id="post_content"
          name="content"
          class="form-control"
          rows="6"
          placeholder="Напишите пост..."></textarea>
      </div>

      <button type="submit" class="btn">Опубликовать</button>
    </form>
  </main>

  <footer class="footer">
    <p>&copy; 2025 MyBlog. Все права защищены.</p>
  </footer>
</body>

</html>
</title>
</head>

<body>

</body>

</html>