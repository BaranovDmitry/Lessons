<?php
function getPattern(string $pattern_name) : string
{
    $patterns = [
        "rule_param" => "/\[(\d+)\]/",
    ];

    return $patterns[$pattern_name] ?? '';
}