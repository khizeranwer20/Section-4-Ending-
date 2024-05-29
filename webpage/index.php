<?php

session_start();
require "./core/functions.php";
require "./core/databse.php";
require "./core/Router.php";
require "./bootstrap.php";

$router1= new Router();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method= $_POST['_method'] ??  $_SERVER["REQUEST_METHOD"];

require "./routes.php";

$router1->route($uri,$method);



