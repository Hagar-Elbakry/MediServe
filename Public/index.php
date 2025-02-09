<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "Core/functions.php";
spl_autoload_register(function ($class) {
    $class = str_replace("\\", "/", $class);
    require BASE_PATH . "$class.php";
});

require BASE_PATH . "bootstrap.php";
require BASE_PATH . "router.php";
