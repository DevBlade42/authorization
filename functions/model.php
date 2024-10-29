<?
function auth($mysqli)
{
    // Сбор данных с формы
    $login = trim($_POST['login']);
    $pass = trim($_POST['password']);

    if (empty($login) || empty($pass)) { // Проверка заполнения полей (на пустоту)
        $_SESSION['auth']['alert'] = "<div class='alert alert-danger' role='alert'>Поля должны быть заполнены!</div>";
        return false;
    } else { // Проверка правильности логина и пароля
        $res_auth = $mysqli->query("SELECT * FROM users WHERE 'login' = $login AND 'password' = $pass");
        if ($res_auth->num_rows == 0) {
            $_SESSION['auth']['alert'] = "<div class='alert alert-danger' role='alert'>Неверный логин или пароль!</div>";

            return false;
        } else {
            $user = $res_auth->fetch_assoc(); // Создание ['auth']['user']
            $_SESSION['auth']['login'] = $user['login'];
            $_SESSION['auth']['lastname'] = $user['lastname'];
            $_SESSION['auth']['firstname'] = $user['firstname'];
            $_SESSION['auth']['middlename'] = $user['middlename'];
            $_SESSION['auth']['role'] = $user['role'];

            return true;
        }
    }
}


function check_user($mysqli)
{
    return true;
}

function block_user($mysqli, $login) 
{
    return true;
}
