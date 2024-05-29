<?php

// namespace core\Middleware;

class Auth{

    public function handle(){
        if(!$_SESSION['user'] ?? false){
            header('location: /Section-1-PHP/webpage/');
            exit();
        }
    }
}