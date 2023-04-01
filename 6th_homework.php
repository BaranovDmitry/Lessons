<?php
//Створити пустий масив і заповнити його 30 значеннями...
function fillArray(): array
{
    $tmpArray = [];
    for($i = 0; $i < 50; $i++){
        $randVal = rand(1, 50);
        $tmpArray[$i] = $randVal;
    }
    return $tmpArray;
}
function countArrayValues($arr, string $type): string
{
    $length = count($arr);
    $result = 0;
    if ($type == 'sum'){
        for ($i = 0; $i < $length; $i++) {
            $result += $arr[$i];
        }
    }
    elseif ($type == 'multiply'){
        $result = $arr[0];
        for ($i = 1; $i < $length; $i++) {
            $result *= $arr[$i];
        }
    }

    $msg = "The result of ".$type." is : ";
    return  $msg . $result;
}
function countOfElement($arr, $number): string
{
    $quantity = 0;
    foreach ($arr as $value){
        if($value == $number){
            $quantity += 1;
        }
    }
    $msg = "The number of \"".$number. "\" values is displaying " . $quantity . " times";
    return $msg;
}
function quantityElementDividedTo($arr, $value): array
{
    $tmpArr = [];
    $length = count($arr); 
    for($i = 0; $i < $length; $i++){
        if($arr[$i] % 5 != 0){
            continue;
        }
        if($arr[$i] % $value == 0){
            $tmpArr[$i] = $arr[$i];
        }
    }
    return $tmpArr;
}

function getMinMaxValues($arr): array
{
    $min = $arr[0];
    $max = $min;
    foreach ($arr as $value){
        if($value < $min){
            $min = $value;
        }
        if($value > $max){
            $max = $value;   
        }
    }
    return [$min, $max];
};    


$myArr = fillArray();

echo '<pre>';
print_r($myArr);
echo '<pre>';
//2. Порахувати суму елементів масиву та вивести на екран
print_r(countArrayValues($myArr, 'sum'));
echo '<pre>';
//3. Порахувати добуток всіх елементів масиву та вивести на екран
print_r(countArrayValues($myArr, 'multiply'));
echo '<pre>';
//4. Перевірте скільки раз число 5 зустрічається у вас в масиві, та виведіть це число на екран.
print_r(countOfElement($myArr, 5));
echo '<pre>';
//Виведіть на екран тільки числа, які націло діляться на 3.
print_r(quantityElementDividedTo($myArr, 5));
echo '<pre>';
//Виведіть на екран мінімальне та максимальне значення з масиву.
print_r(getMinMaxValues($myArr));