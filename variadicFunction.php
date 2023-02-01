<?php
class Variadic
{
public static function foo(int...$number)
{
return array_sum($number) . PHP_EOL;
}
public static function fuu(int $num){
var_dump(func_get_args());
}
}
echo Variadic::foo(1, 2, 3, 10);
Variadic::fuu(10);
