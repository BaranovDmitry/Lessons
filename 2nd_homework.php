<?php
$var1 = 'Some Value';

//Якщо змінна існує і вона не Null
if(isset($var1)){
    echo $var1 . "<br>";
} else {
    var_dump($var1);
}
//Умовний вираз. Якщо змінна не існує
if(isset($var2)){
    echo $var2 . "<br>";
} else {
    var_dump($var2);
}
echo "<br>";
echo isset($var1) ? $var1 : var_dump($var1);
echo "<br>";
echo isset($var2) ? $var2 : var_dump($var2);


