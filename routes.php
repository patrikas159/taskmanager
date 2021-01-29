<?php

$router->define([
    'todo_list' => 'controllers/home.php',
    'todo_list/new-task' => 'controllers/new-task.php',
    'todo_list/edit-task' => 'controllers/edit-task.php',
    'todo_list/404' => 'controllers/404.php',
    'todo_list/delete-task' => 'controllers/delete-task.php',
    'todo_list/complete-task' => 'controllers/complete-task.php'
]);
?>

