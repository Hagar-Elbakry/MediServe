<?php


use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$admins = $db->query("SELECT * FROM admins")->fetchAll();



view("admins/index.view.php",[
    'admins' => $admins
]);