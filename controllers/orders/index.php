<?php


use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$orders = $db->query("SELECT * FROM orders")->fetchAll();


view("orders.view.php",[
    'orders' => $orders,
    'db' => $db
]);