<?php
require "vendor/autoload.php";
use Tasks\Request;
use Tasks\Router;

//cia yra statinis metodas
require Router::load('routes.php')->direct(Request::uri());