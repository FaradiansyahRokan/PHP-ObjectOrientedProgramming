<?php
class Variadic
{
public static function foo(int $number)
{
var_dump($number);
}
}
Variadic::foo(7, 'ini', 'tetap', 'masuk');
