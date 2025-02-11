<?php

use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$service = $db->query("SELECT * FROM services WHERE service_id = :id", [
    ':id' => $_GET['id']
])->fetch();


view("services/edit.view.php", [
    'service' => $service
]);

