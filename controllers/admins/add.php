<?php

use Core\Validator;
$errors = [];

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
}



view("admins/add.view.php", [
    'errors' => $errors
]);