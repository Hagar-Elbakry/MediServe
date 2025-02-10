<?php


use Core\Validator;
use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);
$errors = [];
$success_message = "";

$city = $db->query("SELECT * FROM cities WHERE city_id = :id", [
    ':id' => $_POST['city_id']
])->fetch();

if(Validator::isEmpty($_POST['name'])) {
    $errors['update_city'] = "Please fill all fields";
}

if(count($errors)) {
  return view("cities/edit.view.php", [
        'city' => $city,
        'errors' => $errors
    ]);
}

$db->query("UPDATE cities SET city_name = :name WHERE city_id = :id", [
    ':name' => $_POST['name'],
    ':id' => $_POST['city_id']
]);

header("Location: /show");
die();