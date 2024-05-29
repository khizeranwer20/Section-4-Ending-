<?php
require "./core/App.php";
require "./core/Container.php";
use core\Container;
use core\database;
use core\App;

$container = new Container();

$container ->bind('core\database', function(){
    $config =require ("../webpage/config.php");
     return new database($config['database']);
});

App::setContainer($container);

// $db= $container->resolve('core\database');

