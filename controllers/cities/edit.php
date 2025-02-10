<?php

use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

    $city = $db->query("SELECT * FROM cities WHERE city_id = :id", [
        ':id' => $_GET['id']
    ])->fetch();


    view("cities/edit.view.php", [
        'city' => $city
    ]);

