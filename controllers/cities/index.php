<?php


use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$cities = $db->query("SELECT * FROM cities")->fetchAll();

view("cities/index.view.php", [
    'cities' => $cities
]);
