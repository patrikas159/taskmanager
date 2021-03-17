<?php
use Tasks\Router;
$router=new Router();
$router->define([
    '/'=>'controllers/home.php',
    '/complete-task'=>'controllers/complete-task.php',
    '/delete-task'=>'controllers/delete-task.php',
    '/new-task'=>'controllers/new-task.php',
    '404'=>'controllers/404.php'
]);
