<?php

require "../webpage/core/validator.php";
use core\database;
use core\validator;
use core\App;

$db = App::resolve(database::class);

$currentuserid = 1;

$note = $db->query(
    'SELECT * from notes where id = :id',
    ['id' => $_POST['id']]
)->findorfail();


authorize($note['user_id'] ===  $currentuserid);


$errors=[];

if(! validator::string($_POST['body'], 1 , 1000)){

    $errors['body']= 'A body of no more than 1000 is required';
 }

 if(count($errors)){

    return " /Section-1-PHP/webpage/note/edit.php";
 }


 $db->query('update notes set body=:body where id = :id',[
    'id'=>$_POST['id'],
    'body'=> trim($_POST['body']),
 ]);

 header('location: /Section-1-PHP/webpage/notes');
 die();