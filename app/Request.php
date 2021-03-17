<?php
namespace Tasks;
class Request {
    public static function uri(){
        return str_replace("/todo","",trim($_SERVER['REQUEST_URI']));
    }
}