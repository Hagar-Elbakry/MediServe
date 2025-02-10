<?php



$router->get('/admin' , 'controllers/admins/index.php');
$router->get('/add' , 'controllers/admins/add.php');
$router->post('/add' , 'controllers/admins/add.php');
$router->post('/login' , 'controllers/admins/login.php');
$router->get('/login' , 'controllers/admins/login.php');
$router->get('/logout' , 'controllers/admins/logout.php');
$router->get('/city' , 'controllers/cities/add.php');
$router->post('/city' , 'controllers/cities/add.php');
$router->get('/show' , 'controllers/cities/index.php');
$router->get('/edit' , 'controllers/cities/edit.php');
$router->patch('/update', 'controllers/cities/update.php');
$router->delete('/delete', 'controllers/cities/delete.php');