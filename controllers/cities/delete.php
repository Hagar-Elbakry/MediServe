<?php

use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$result = $db->query("DELETE FROM cities WHERE city_id = :id", [
    ':id' => $_POST['city_id']
]);

if($result) {
    header("Location: /show");
    die();
}
