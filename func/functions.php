<?php
function dd(array $array) : void
{
    print_r('<pre>');
    var_dump($array);
    print_r('<pre>');
}

function setMessage(string $message, string $type = 'alerts') : void
{
    if (!isset($_SESSION[$type]) || !is_array($_SESSION[$type])) {
        $_SESSION[$type] = [];
    }

    $_SESSION[$type][] = $message;
}


function getMessage(string $type) : array
{
    $message = $_SESSION[$type] ?? [];
    unset($_SESSION[$type]);
    return $message;
}