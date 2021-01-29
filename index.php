<?php
require "vendor/autoload.php";
use Tasks\Request;
use Tasks\Router;
require Router::load('routes.php')
    ->direct(Request::uri());