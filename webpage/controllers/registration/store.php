<?php
require "../webpage/core/validator.php";

use core\database;
use core\validator;
use core\App;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!validator::email($email)) {
    $errors['email'] = 'Please provide a valid email';
}
if (!validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of atleast seven characters';
}

if (!empty($errors)) {
    require 'controllers/registration/create.php';
}

$db = App::resolve(database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email,

])->find();

if ($user) {
    header('location: /Section-1-PHP/webpage/');
    exit();
} else {
    $db->query('INSERT INTO users(email, password) VALUES (:email ,:password)', [
        'email' => $email,
        'password' => $password
    ]);


    $_SESSION['user'] = [
        'email' => $email
    ];
    header('location: /Section-1-PHP/webpage/');
    exit();
}
