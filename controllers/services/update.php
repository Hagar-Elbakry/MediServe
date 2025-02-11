<?php


use Core\Validator;
use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);
$errors = [];
$success_message = "";

$service = $db->query("SELECT * FROM services WHERE service_id = :id", [
    ':id' => $_POST['service_id']
])->fetch();

if(Validator::isEmpty($_POST['name'])) {
    $errors['update_service'] = "Please fill all fields";
}

if(count($errors)) {
    return view("services/edit.view.php", [
        'service' => $service,
        'errors' => $errors
    ]);
}

$db->query("UPDATE services SET service_name = :name WHERE service_id = :id", [
    ':name' => $_POST['name'],
    ':id' => $_POST['service_id']
]);

header("Location: /services");
die();