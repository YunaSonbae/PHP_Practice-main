<link rel="stylesheet" href="/PHP_Practice-main/public/css/subdivisions.css">
<script src="/PHP_Practice-main/public/js/main.js"></script>
<h2>Выберите подразделение</h2>

<div class="container">
    <div onclick="setColor(this)" class="list__subdivisions">
        <p>Подразделение 1</p>
    </div>
    <div onclick="setColor(this)" class="list__subdivisions">
        <p>Подразделение 2</p>
    </div>
    <div onclick="setColor(this)" class="list__subdivisions">
        <p>Подразделение 3</p>
    </div>
    <a href="<?= app()->route->getUrl('/employees') ?>">Выбрать сотрудников</a>
</div>