<?
session_start();  // начало сессии

// подключение CSS
define('CSS', '..\assets\css');

// заголовок страницы
define('TITLE', 'Авторизация');



// зависимости для БД
define('BD_USER', 'root');
define('BD_PASS', '');
define('BD_HOST', 'localhost');
define('BD', 'hotel');

// Подключение БД
$mysqli = new mysqli(BD_HOST, BD_USER,  BD_PASS, BD);
if ($mysqli->connect_errno) {
    echo "Ошибка! Не удалось подключиться к БД!" . $mysqli->connect_error;
    exit();
}
