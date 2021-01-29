<?php
use Tasks\DB;
use Tasks\Task;
$connect = DB::connect();
$tasks = new Task($connect);;


require 'view/pages/home.view.php';