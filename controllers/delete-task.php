<?php
use Tasks\Request;
use Tasks\DB;
use Tasks\Task;

$connections = DB::connect();
$task = new Task($connections);
$id = intval(basename(Request::uri()));
//var_dump($id);
$task->deleteTask($id);




