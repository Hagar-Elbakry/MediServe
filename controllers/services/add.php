<?php
use Core\Validator;
use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);
$errors = [];
$success_message = "";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    if(Validator::isEmpty($name)) {
        $errors['add_service'] = "Please fill all fields";
    }

    if(empty($errors)) {
        $query = "INSERT INTO services (service_name) VALUES (:name)";
        $result = $db->query($query, [
            ':name' => $name
        ]);
        if($result) {
            $success_message = "Service added successfully";
        }
    }
}



view("services/add.view.php",[
    'errors' => $errors,
    'success_message' => $success_message
]);