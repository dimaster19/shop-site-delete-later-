<?php
require('/ospanel/domains/shop2.ru/settings/settings.php');

if (!$dbConnection) {
    die("Ошибка подключения: " . pg_last_error());
}
$query = pg_query($dbConnection, "SELECT * FROM products");
if (!$query) {
    die("Ошибка выполнения запроса");
}

$title = getTitle(basename(__FILE__, '.php'));

include('html/header.php');
?>


<div class="content mt-3 mb-3 radius-content py-3 px-3">
    <h1>Регистрация</h1>
    <form class="row g-3 needs-validation" validate>
        <div class="col-md-6">
            <input type="email" name="email" aria-label="E-mail" placeholder="E-mail" required="" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="password" aria-label="Пароль" placeholder="Пароль" name="pass" required="" class="form-control">

        </div>
        <div class="col-12 d-flex" style="align-items: center;">
            <button class="btn btn-primary" type="submit">Войти</button>
            <a class="mx-2" href="">Зарегистрироваться</a>
        </div>
    </form>
</div>

<!-- Close DB -->
<?php
pg_close($dbConnection);

include('html/footer.php')
?>
