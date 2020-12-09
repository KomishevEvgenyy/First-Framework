<?php

ini_set('display_errors', 1); // функция для вывода ошитбок на экран
error_reporting(E_ALL); // функция которая будет выводить все ошибки

function debug($str)
{
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
}