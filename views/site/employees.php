<link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
<link rel="stylesheet" href="/PHP_Practice-main/public/css/employees.css">
<script src="/PHP_Practice-main/public/js/main.js"></script>

<div class="container">
    <div class="main__text">
        <p>Список сотрудников</p>
    </div>
    <div class="ag-format-container">
        <div class="ag-courses_box">
                    <?php
                    foreach ($employees as $employee) {
                    ?>
            <div class="ag-courses_item">
                <a href="<?= app()->route->getUrl("/employee?id=$employee->id") ?>" class="ag-courses-item_link">
                    <div class="ag-courses-item_bg"></div>

                    <div class="ag-courses-item_title">
                            <p>Фамилия: <?= $employee->surname?></p>
                            <p>Имя: <?= $employee->name?></p>
                            <p>Отчество: <?= $employee->patronymic?></p>
                            <p>Пол: <?= $employee->gender?></p>
                            <p>Дата рождения: <?= $employee->date_of_birth?></p>
                            <p>Адрес прописки: <?= $employee->place_of_residence?></p>
                            <p>Должность: <?= $employee->job?></p>
                            <p>Подразделение: <?= $employee->subdivision?></p>
                    </div>
                </a>
            </div>

                            <?php
                        }
                        ?>
        </div>
    </div>