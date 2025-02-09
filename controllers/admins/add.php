<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);
$errors = [];
$success_message = "";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if(Validator::isEmpty($name) || Validator::isEmpty($email) || Validator::isEmpty($password)) {
        $errors['add_new_admin'] = "Please fill all fields";
    } else {
        if(!Validator::email($email)) {
            $errors['add_new_admin'] = "Please enter a valid email";
        }
    }

    if(empty($errors)) {
        $query = "INSERT INTO admins (admin_name, admin_email, admin_password) VALUES (:name, :email, :password)";
        $result = $db->query($query, [
            ':name' => $name,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_BCRYPT)
        ]);

        if($result) {
            $success_message = "Admin added successfully";
        }
    }
}



view("admins/add.view.php", [
    'errors' => $errors,
    'success_message' => $success_message
]);