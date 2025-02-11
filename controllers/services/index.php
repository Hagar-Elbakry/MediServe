<?php


use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$services = $db->query("SELECT * FROM services")->fetchAll();



view("services/index.view.php",[
    'services' => $services
]);