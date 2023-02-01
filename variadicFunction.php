<?php
class Variadic
{
public static function foo(int $number)
{
var_dump($number);
}
public static function fuu(int $num){
var_dump(func_get_args());
}
}
Variadic::foo(7, 'ini', 'tetap', 'masuk');
Variadic::fuu(10);
