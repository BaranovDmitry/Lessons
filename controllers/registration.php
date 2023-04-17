<?php
session_start();
require_once '../func/functions.php';

//1. Проверить метод HTTP
//2. Проверить данные на наличие
//3. Валидация данных
//4. Регистрация

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    setMessage('Method does not support', 'warning');
    header('location: https://localhost:63342/Course/13th_homework.php');
}

if(!$_POST['name'] && strlen($_POST['name'] < 5)){
    setMessage('Name should be more than 5 letters', 'warning');
    header('location: https://localhost:63342/Course/13th_homework.php');
}
