<link rel="stylesheet" href="/PHP_Practice-main/public/css/login.css">



<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>


<?php
if (!app()->auth::check()):
    ?>
    <div class="login-page">
        <div class="form">
            <form method="post" class="login-form">
                <h2>Авторизация</h2>
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <input type="text" placeholder="логин" name="login"/>
                <input type="password" placeholder="пароль" name="password"/>
                <button>войти</button>
                <p class="message">Not registered? <a href="<?= app()->route->getUrl('/signup') ?>">Create an account</a></p>
            </form>
        </div>
    </div>
<?php endif;
