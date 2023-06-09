<?php
function printHtml(array $items, string $type = 'ul'): string 
{
    $myHtmlView = "<{$type}><br/>";

    foreach ($items as $item) {
        $myHtmlView .= "<li>{$item}</li><br/>";
    }

    $myHtmlView .= "</{$type}>";

    return $myHtmlView;
}


$myArr = [
    'Point 1', 
    'Point 2', 
    'Point 3',
    'Point 4',
];
print_r('ul-list');
echo printHtml($myArr);
print_r('ol-list');
echo printHtml($myArr, 'ol');