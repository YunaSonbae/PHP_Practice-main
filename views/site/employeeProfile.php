<link rel="stylesheet" href="/PHP_Practice-main/public/css/employeeProfile.css">
<?php
foreach ($employees as $employee) {
?>
<div class="ag-courses-item_title">
    <p>Фамилия: <?= $employee->surname?></p>
    <p>Имя: <?= $employee->name?></p>
    <p>Отчество: <?= $employee->patronymic?></p>
    <p>Пол: <?= $employee->gender?></p>
    <p>Дата рождения: <?= $employee->date_of_birth?></p>
    <p>Адрес прописки: <?= $employee->place_of_residence?></p>
    <p>Должность: <?= $employee->job?></p>
    <p>Подразделение: <?= $employee->subdivision?></p>
    <p>Фото: <br/><img class="div" src="/PHP_Practice-main/public/img/<?= $employee->photo?>" alt="img"></p>
</div>
    <div class="container">
        <?php
        }
        ?>

        <div class="list__disciplines">
            <?php
            foreach ($disEmp as $de) {
            ?>
                <p>Дисциплина: <?= $de->discipline_id?></p>
                <?php
            }
            ?>
        </div>


    </div>
<div class="add__discipline">
    <h2>Добавление дисциплины</h2>
    <form action="<?= app()->route->getUrl("/add_discipline_employee") ?>" method="get">
        <input type="hidden" name="id_employee" value="<?= $employee->id; ?>">
        <select name="id_discipline" id="choice__discipline">
            <?php
            foreach ($disciplines as $discipline) {
                ?>
                <option value="<?= $discipline->id?>" ><?= $discipline->name?></option>
                <?php
            }
            ?>
        </select><br/>
        <button>Добавить</button>
    </form>

</div>
