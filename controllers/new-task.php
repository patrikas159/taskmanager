<?php

use Tasks\DB;
use Tasks\Task;
require 'inc/options.php';

if(isset($_POST['send'])){
    var_dump($_POST);
    $connections = DB::connect();
    $task = new Task($connections);
    $task->createTask($_POST);
}else{
    require 'view/pages/new-task.view.php';
}
