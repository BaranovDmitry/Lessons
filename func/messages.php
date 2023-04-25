<?php

function getMsg(string $type, $parameter_1 = '', $parameter_2 = '') : string
{
    $messages = [
        'required' => "The field " . $parameter_1 . " must be required!",
        'min_length' => "The field " . $parameter_1 . " must be biggest than " . $parameter_2 ,
        'max_length' => "The field " . $parameter_1 . " must be less than " . $parameter_2 ,
        'length' => "The length must be between " . $parameter_1 . " and " . $parameter_2,
        'password_confirm_min' => "The field " . $parameter_1 . " must be biggest than $parameter_2" ,
        'password_confirm_match' => "The field " . $parameter_1 . " must match to the Password field" ,

    ];
    return $messages[$type];
}

