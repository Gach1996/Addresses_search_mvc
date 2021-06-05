<?php

define('PathDir', '../controllers/');
define('PathPrefix', 'Controller.php');
define('TemplatePrefix', "../views/");
define('TemplatePostfix', '.tpl');
define('TemplatesWebPath', "/templates/");

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
define('APP', 'TasksMVC');
//define('URI', $_SERVER['REQUEST_URI']);

require_once(ROOT.'/../components/helpers.php');
require_once(ROOT.'/../components/Router.php');
require_once(ROOT.'/../components/Db.php');

require('../library/Smarty/libs/Smarty.class.php');

Db::getConnection();

$router = new Router();
$router->run();
