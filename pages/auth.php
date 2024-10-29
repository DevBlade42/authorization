<?
if (isset($_POST['auth'])) {
    if (check_user($mysqli)) {
        auth($mysqli);
        return true;
    }
}

?>

<div class="row d-flex justify-content-center">
    <div class="col-md-4">
        <h3 class="text-center mt-2">Авторизация</h3>
        <form method="POST">
            <div class="mb-3">
                <label for="login" class="form-label">Введите логин</label>
                <input type="text" class="form-control" id="login" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <button name="auth" type="submit" class="btn btn-primary w-100">Авторизоваться</button>
        </form>
    </div>

</div>