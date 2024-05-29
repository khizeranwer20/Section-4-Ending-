<?php

require "Response.php";
function dd($value){
    echo "<pre>";

    var_dump($value);
    echo "</pre>";

    die();
}

function url($value){
   return $_SERVER['REQUEST_URI']==$value;
}
function abort($code =404)
{
    http_response_code($code);

        return require "view/partials/{$code}.php";
        die();
}
function authorize($condition,$status =Response::FORBIDDEN){

    if(! $condition){
        abort($status);
    }
}