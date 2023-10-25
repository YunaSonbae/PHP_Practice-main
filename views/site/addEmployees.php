<link rel="stylesheet" href="/PHP_Practice-main/public/css/addEmployees.css">

<div class="login-page">
    <div class="form">
        <form action="" method="post" class="login-form" enctype="multipart/form-data">
            <h2>Добавление сотрудника</h2>
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <input type="text" id="surname" placeholder="фамилия" name="surname"/>
            <input type="text" id="name" placeholder="имя" name="name"/>
            <input type="text" id="patronymic" placeholder="отчество" name="patronymic"/>
            <input type="text" id="gender" placeholder="пол" name="gender"/>
            <input type="date" id="date_of_birth" placeholder="дата рождения" name="date_of_birth"/>
            <input type="text" id="place_of_residence" placeholder="адрес прописки" name="place_of_residence"/>
            <input type="text" id="job" placeholder="должность" name="job"/>
            <input type="text" id="subdivision" placeholder="подразделение" name="subdivision"/>
            <input type="file" id="photo" placeholder="фото" name="photo"/>
            <button class="form_submit">добавить</button>
        </form>
    </div>
</div>
