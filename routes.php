<?php

$router->get('/', 'controllers/index.php');
$router->post('/', 'controllers/index.php');

$router->get('/admins' , 'controllers/admins/index.php');
$router->get('/add-admin' , 'controllers/admins/add.php');
$router->post('/add-admin' , 'controllers/admins/add.php');
$router->post('/login' , 'controllers/admins/login.php');
$router->get('/login' , 'controllers/admins/login.php');
$router->get('/logout' , 'controllers/admins/logout.php');


$router->get('/add-city' , 'controllers/cities/add.php');
$router->post('/add-city' , 'controllers/cities/add.php');
$router->get('/cities' , 'controllers/cities/index.php');
$router->get('/edit-city' , 'controllers/cities/edit.php');
$router->patch('/update-city', 'controllers/cities/update.php');
$router->delete('/delete-city', 'controllers/cities/delete.php');

$router->get('/add-service', 'controllers/services/add.php');
$router->post('/add-service', 'controllers/services/add.php');
$router->get('/services', 'controllers/services/index.php');
$router->get('/edit-service' , 'controllers/services/edit.php');
$router->patch('/update-service', 'controllers/services/update.php');
$router->delete('/delete-service', 'controllers/services/delete.php');

$router->get('/orders', 'controllers/orders/index.php');
$router->delete('/delete-order', 'controllers/orders/delete.php');