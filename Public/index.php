<?php

use Core\Router;

session_start();
const BASE_PATH = __DIR__ . "/../";
spl_autoload_register(function ($class) {
    $class = str_replace("\\", "/", $class);
    require BASE_PATH . "$class.php";
});

require BASE_PATH . "Core/functions.php";
require BASE_PATH . "bootstrap.php";

$router = new Router();
require BASE_PATH . "routes.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['__method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);



