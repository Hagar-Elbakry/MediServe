<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = APP::resolve(Database::class);

$errors =[];
$success_message = "";

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(Validator::isEmpty($email) || Validator::isEmpty($password)) {
        $errors['login'] = "Please fill all fields";
    } else {
        if(!Validator::email($email)) {
            $errors['login'] = "Please enter a valid email";
        }

        $user = $db->query("SELECT * FROM admins WHERE admin_email = :email", [
            ':email' => $email
        ])->fetchAll();

        if(!empty($user)) {
            if(password_verify($password, $user[0]['admin_password'])) {
                $success_message = "Login successful";
                $_SESSION['admin_id'] = $user[0]['admin_id'];
                $_SESSION['admin_name'] = $user[0]['admin_name'];
                $_SESSION['admin_email'] = $user[0]['admin_email'];
            } else {
                $errors['login'] = "Invalid password";
            }
        } else {
            $errors['login'] = "Invalid email";
        }
    }
}
view("admins/login.view.php", [
    'errors' => $errors,
    'success_message' => $success_message
]);
