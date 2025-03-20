<header>
    <!-- <a href="/?page=catalog">Каталог</a> -->
    <a href="/">Главная</a>

    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="?exit">Выйти</a>
    <?php else: ?>
        <a href="/?page=create">Создание товара</a>
        <a href="/?page=register">Регистрация</a>
        <a href="/?page=login">Войти</a>
    <?php endif; ?>
</header>