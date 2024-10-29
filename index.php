<?
require 'config.php'; // Подключение конфига
require 'functions/model.php'; // Подключение модели

//session_destroy();
print_r($_SESSION);
require 'pages/inc/head.php'; // Хедер
if (isset($_SESSION['auth']['user'])) { // Обработка кнопки "auth"
    require 'pages/page1.php'; // Если пользователь авторизовался
} else {
    require 'pages/auth.php'; // Если пользователь не авторизовался
}
require 'pages/inc/foot.php'; // Футер
