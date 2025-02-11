<?php


use Core\App;
use Core\Database;
use Core\Validator;

$db = APP::resolve(Database::class);
$errors = [];
$success_message = "";

$cities = $db->query("SELECT * FROM cities")->fetchAll();
$services = $db->query("SELECT * FROM services")->fetchAll();
if(isset($_POST['submit'])) {
    $service = $_POST['service_id'];
    $city = $_POST['city_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if(Validator::isEmpty($service) || Validator::isEmpty($city) || Validator::isEmpty($name) || Validator::isEmpty($phone) || Validator::isEmpty($email)) {
        $errors['add_order'] = "Please fill all fields";
    }

    if(!Validator::email($email)) {
        $errors['add_order'] = "Please enter a valid email";
    }

    if(empty($errors)) {
        $query = "INSERT INTO orders (order_name, order_phone, order_email, service_id, city_id) VALUES (:name, :phone, :email, :service, :city)";
        $order = $db->query($query, [
            ':name' => $name,
            ':phone' => $phone,
            ':email' => $email,
            ':service' => $service,
            ':city' => $city
        ]);

        if($order) {
            $success_message = "Order added successfully";
        }
    }
}

view("index.view.php", [
    'cities' => $cities,
    'services' => $services,
    'errors' => $errors,
    'success_message' => $success_message
]);
