<?php

$getRandValue = fn() => rand(1, 20);
$array = array_map(fn($value) => $getRandValue(), range(1, 10));

echo '<pre>';
print_r($array);
echo '<pre>';
/*
 * 
 *  1. Створіть функцію, яка приймає масив чисел та функцію, яка визначає, які елементи масиву повинні бути включені
 *  в новий масив. Поверніть новий масив з елементами, які відповідають умові, використовуючи callback функцію
 *  В якості callback функції напишіть анонімну функцію яка перевіряє чи є число парним).
 * 
 */
$doubleNumberArray = function($arr) : array
{
    $newArr = [];
    foreach ($arr as $k => $value){
        if($value % 2 == 0)
        $newArr[$k] = $value;
    }
    return $newArr;
};


/*
 * 2.Створіть стрілочну функцію, яка приймає 2 числа та повертає їх різницю.
 */
$getDiff = fn($value1, $value2) => $value1 - $value2;


/*
 * 3.Напишіть анонімну функцію, яка приймає масив чисел і повертає суму всіх чисел, які більше за 10.
 */
$sum = function($array) : int
{
    $result = 0;
    foreach ($array as $value){
        if($value > 10)
        $result += $value;
    }
    return $result;
};


/*
 * 4.Напишіть стрілочну функцію, яка приймає рядок і повертає новий рядок де перша літера у верхньому регістрі. 
 * Використайте цю функцію для рішення задачі: Є масив з рядками, треба для кожного елемента змінити першу 
 * літеру у верхній регістр. (для проходження по всім елементам масиву використовувати одну з php функцій).
 */
$returnNewString = fn($string) => ucfirst($string);

$arrayWithStrings = [
    'some str1',
    'some str2',
    'some str3',
    'some str4',
    'some str5',
];
$capitalArray = function($arr, $returnNewString) : array 
{
    return array_map($returnNewString, $arr);
};


/*
 * 5. Напишіть функцію, яка множить кожен елемент масиву на число, передане до функції за ссилкою. 
 */
function multiplyValues(array $arr, &$number): array 
{
    $results = [];
    foreach ($arr as $value) {
        $results[] = $value * $number;
    }
    return $results;
}


/*
 * 6.Напишіть функцію, яка приймає масив слів і повертає масив зі словами, які мають довжину менше заданого числа. 
 * Функція має приймати два параметри: масив слів та ціле число, що визначає максимальну довжину слова. 
 * Функція має змінювати масив слів, переданий до неї за ссилкою.
*/
$returnArrayWithSpecificRowLength = function(&$array, $length) : void {
    foreach ($array as $index => $string) {
        if (strlen($string) > $length) {
            unset($array[$index]);
        }
    }
};



// Results -------------------------------------------------------------------


print("1. Task");
echo '<pre>';
print_r($doubleNumberArray($array));
echo '<pre>';


print("2. Task");
$value1 = rand(10,20);
$value2 = rand(0,10);
$diff = $getDiff($value1, $value2);
echo $value1 . ' - ' . $value2 . ' = ' . $diff;

print("3. Task");
echo '<pre>';
print_r("The result of sum of the array is: ");
print_r($sum($array));
echo '<pre>';

print("4. Task");
$someString = "some string with text";
echo '<pre>';
print_r($returnNewString($someString));
echo '<pre>';
print_r($capitalArray($arrayWithStrings, $returnNewString));
echo '</pre>';


print("5. Task");
$number = 2;
$newMultiplyArray = multiplyValues($array, $number);
echo '<pre>';
print_r($newMultiplyArray);
echo '</pre>';


print("6. Task");
$arr1 = [
    "Stake",
    "Big",
    "Director",
    "Sky",
    "Keyboard"
];
$returnArrayWithSpecificRowLength($arr1, 5);
echo '<pre>';
print_r($arr1);
echo '</pre>';








