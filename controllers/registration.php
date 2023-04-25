<?php
require_once '../func/functions.php';
require_once '../func/validator.php';
require_once '../func/messages.php';
require_once '../func/preg_patterns.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    setMessage("Method does not support", 'warning');
    header('location: https://localhost:63342/Course/13th_homework.php');
}

$name = $_POST['name'];

$errors = validate($_POST,
    [
        'name' => 'required|min_length[5]|max_length[10]',
        'email' => 'required|min_length[6]|email',
        'password' => 'required|min_length[8]',
        'password_confirm' => 'required|min_length[8]|match',

    ]
);
if ($errors){
    $_SESSION['errors'] = $errors;
    routeToMainPage();
}
//dd($errors);
//Сравнить пароль и конфирм. Тут что то не то
//dd($errors);


