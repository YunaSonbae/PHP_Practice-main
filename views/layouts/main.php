<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/PHP_Practice-main/public/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <div class="nav__menu">
    <div class="nav__menu-left">
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <a href="<?= app()->route->getUrl('/employees') ?>">Сотрудники</a>
        <a href="<?= app()->route->getUrl('/subdivisions') ?>">Подразделения</a>
        <a href="<?= app()->route->getUrl('/disciplines') ?>">Дисциплины</a>
    </div>
        <div class="nav__menu-right">
            <?php
            if (!app()->auth::check()):
                ?>
                <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
            <?php
            else:
            ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход <!--(<?= app()->auth::user()->name ?>)--></a>
        </div>
        </div>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
