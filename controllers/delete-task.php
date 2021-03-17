<?php
use Tasks\Request;
use Tasks\DB;
use Tasks\Task;

$connection = DB::connect();
$tasks = new Task($connection);
$tasks->deleteTask(intval(basename(Request::uri())));




