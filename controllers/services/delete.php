<?php


use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$result = $db->query("DELETE FROM services WHERE service_id = :id", [
    ':id' => $_POST['service_id']
]);

if ($result) {
    header("Location: /services");
    die();
}
