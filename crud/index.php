<?
require('database.php');

$query = 'SELECT * FROM post';
$stmt = $sql->prepare($query);
$stmt->execute();
$myPosts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <title>Главная — Блог</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <!-- Шапка -->
  <header class="header">
    <div class="header-nav container">
      <div class="logo">MyBlog</div>
      <ul class="nav-list">
        <li><a href="index.php">Главная</a></li>
        <li><a href="create.php">Создать пост</a></li>
      </ul>
    </div>
  </header>

  <!-- Основной контент -->
  <main class="container">
    <h1>Список постов</h1>
    <div class="post-list">
      <? foreach ($myPosts as $post): ?>
        <div class="post-card">
          <h2><?= $post['title_post'] ?></h2>
          <div class="back_block">
            <div class="background_block"></div>
            <p class="post-body"><?= $post['discription_post'] ?></p>
          </div>
          <div class="mt-auto">
            <a href="show.php?<?= isset($post['id_post']) ? 'id=' . $post['id_post'] : '' ?>" class="btn">Читать далее</a>
          </div>
        </div>
      <? endforeach; ?>
    </div>
  </main>

  <!-- Футер -->
  <footer class="footer">
    <p>&copy; 2025 MyBlog. Все права защищены.</p>
  </footer>
</body>

</html>