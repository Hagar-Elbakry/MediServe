<?php

use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$result = $db->query("DELETE FROM orders WHERE order_id = :id", [
    ':id' => $_POST['order_id']
]);

if($result) {
    header("Location: /orders");
    die();
}
