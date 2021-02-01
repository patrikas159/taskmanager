<?php
session_start();

use Tasks\DB;
use Tasks\Task;
use Tasks\Validation;
require 'inc/options.php';

if (isset($_POST['send'])) {
    $errorsArray = Validation::validate($_POST);
//    var_dump($errorsArray);
}

if(isset($_POST['send']) && empty($errorsArray)) {
    $connections = DB::connect();
    $task = new Task($connections);
    $task->createTask($_POST);
} else {
    require 'view/pages/new-task.view.php';
}
