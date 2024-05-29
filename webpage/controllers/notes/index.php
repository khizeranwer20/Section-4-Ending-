<?php



use core\database;
use core\App;

$db = App::resolve(database::class);


$heading= "My Notes";
$notes= $db->query('SELECT * from notes where user_id= 1')->finder();

require "../webpage/view/notes/index.view.php";


