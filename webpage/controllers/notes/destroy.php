<?php

use core\database;
use core\App;

$db = App:: resolve(database::class);

$currentuserid=1;
$note = $db->query('SELECT * from notes where id = :id',
['id'=> $_POST['id']])-> findorfail();

authorize($note['user_id'] ===  $currentuserid);

  $db->query('delete from notes where id = :id',[
    'id'=>$_POST['id']
   ]);

    header('location: /Section-1-PHP/webpage/notes');
    exit();
