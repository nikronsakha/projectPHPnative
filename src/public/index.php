<?php
define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("CONFIG", ROOT . '/config');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://localhost:8080');

require CORE . '/funcs.php';
require CONFIG . '/routes.php';
require CORE . '/router.php';



















//
//
//define("ROOT", dirname(__DIR__));
//define("PUBLIC", ROOT . '/public');
//define("CORE", ROOT . '/core');
//define("APP", ROOT . '/app');
//define("CONTROLLERS", APP . '/controllers');
//define("VIEWS", APP . '/views');
//define("PATH", ROOT . '/http://localhost:8080');
//
//$uri = trim($_SERVER['REQUEST_URI'],'/');
//
//require CORE . '/funcs.php';
//
//
//if ($uri === '' ){
//    require CONTROLLERS . "/index.php";
//} elseif ($uri === 'about.php'){
//    require CONTROLLERS .'/about.php';
//}



