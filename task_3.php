<?php
//Задание 3 - Управляющие констукции + циклы
//Написать скрипт, проверяющий високосный ли год $a.
//$a может быть в диапазоне от 1 до 9999.

$a = 2020;

//TODO - write your code

if (is_int($a) && $a<=9999 && $a>=1) {
    if ($a % 2 == 0) {
        echo 'Год високосный';
    } else {
        echo 'Год не високосный';
    }
}