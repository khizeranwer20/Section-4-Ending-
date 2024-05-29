<?php


require "./core/validator.php";
use core\validator;
use core\database;
use core\App;

$db = App:: resolve(database::class);

    $errors=[];    
    if(! validator::string($_POST['body'], 1 , 1000)){

       $errors['body']= 'A body of no more than 1000 is required';
    }
    if(!empty($errors))
    {
           return require "../webpage/view/notes/create.view.php";
    }
   
       $db->query('INSERT INTO NOTES(body,user_id) VALUES (:body, :user_id )', [
           'body'=> $_POST['body'],
           'user_id'=> 1
       ]);

       header('location:  /Section-1-PHP/webpage/notes');
       die();
