<?php
function dd($var): void
{
    if (is_array($var)) {
        echo '<pre>';
        var_dump($var);
        echo '<pre>';
        exit();
    } else {
        print_r($var);
    }
}

function setMessage(string $message, string $type = 'alerts'): void
{
    if (!isset($_SESSION[$type])) {
        $_SESSION[$type] = [];
    }
    $_SESSION[$type][] = $message;
}


function getMessage(string $type): array
{
    $message = $_SESSION[$type] ?? [];
    unset($_SESSION[$type]);
    return $message;
}

function isMessageExists(string $type): bool
{
    return isset($_SESSION[$type]);
}

function routeToMainPage() :void
{
    header('location: https://localhost:63342/Course/13th_homework.php');
}



