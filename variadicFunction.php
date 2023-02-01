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
public static function add(int...$numbers){
    return array_sum($numbers);
}
}
echo Variadic::foo(1, 2, 3, 10);
Variadic::fuu(10);

$number = [1,2,3];
echo Variadic::add(...$number);
