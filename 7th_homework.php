<?php
print_r("Виведіть на екран всі числа від 1 до 10 використовуючи цикл while");
$i = 1;
while ($i <= 10){
    echo '<pre>';
    echo $i;
    echo '<pre>';
    $i++;
}
print_r("Обчисліть факторіал числа 5 використовуючи цикл while.");
$i = 0;
$value = 0;
$factorial = 0;
while ($i < 5){
    echo '<pre>';
    if($i == 0)
        echo $value += 1;
    
    $i++;
    echo $factorial = $value *= $i;
    echo '<pre>';
}
print_r("Виведіть на екран всі парні числа від 1 до 20 використовуючи, цикл while.");
echo '<pre>';
$i = 1;
while ($i <= 20){
    if($i % 2 == 0){
        echo $i;
    }
    $i++;
    echo '<pre>';
}