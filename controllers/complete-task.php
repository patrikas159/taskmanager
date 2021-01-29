<?php

use Tasks\Request;
use Tasks\DB;
use Tasks\Task;
//echo "test";
$connections = DB::connect();
$task = new Task($connections);
$id = intval(basename(Request::uri()));
$task->setComplete($id);
