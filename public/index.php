<?php

// Front Controller

// 1. Обшие настройки
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
define('APP', 'TasksMVC');
//define('URI', $_SERVER['REQUEST_URI']);



require_once(ROOT.'/../components/Router.php');
require_once(ROOT.'/../components/Db.php');
require_once(ROOT.'/../components/helpers.php');

// 3. Установка соединения с БД
Db::getConnection();

// 4. Вызов Router
$router = new Router();
$router->run();
