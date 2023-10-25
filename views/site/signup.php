<link rel="stylesheet" href="/PHP_Practice-main/public/css/signup.css">

<h3><?= $message ?? ''; ?></h3>
<div class="login-page">
    <div class="form">
        <form method="post" class="register-form">
            <h2>Регистрация</h2>
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <input type="text" placeholder="имя" name="name"/>
            <input type="text" placeholder="логин" name="login"/>
            <input type="password" placeholder="пароль" name="password"/>
            <button>создать</button>
            <p class="message">Already registered? <a href="<?= app()->route->getUrl('/login') ?>">Sign In</a></p>
        </form>
    </div>
</div>