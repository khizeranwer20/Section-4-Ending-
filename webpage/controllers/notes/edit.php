<?php



use core\database; 
use core\App;

$db = App::resolve(database::class);

$currentuserid = 1;

$note = $db->query('SELECT * from notes where id = :id', ['id' => $_GET['id']])->findorfail();
authorize($note['user_id'] ===  $currentuserid);
$heading="Edit Note";

require "../webpage/view/notes/edit.view.php";