<?php
// tanpa recursiveFunction
class Faktorial
{
public static function nonRecursive(int $number)
{
$result = 1;
for ($i = 1; $i <= $number; $i++) {
$result *= $i;
}
return $result;
}
}
echo Faktorial::nonRecursive(4);
echo PHP_EOL;

// menggunakan recursiveFunction

class hitung
{
public static function nonRecursive(int $number)
{
$result = 1;
for ($i = 1; $i <= $number; $i++) {
$result *= $i;
}
return $result;
}
public static function recursive(int $number)
{
if (2 > $number) {
return $number;
}
return $number * self::recursive($number - 1);
}
}
echo hitung::nonRecursive(5);
echo PHP_EOL;
echo hitung::recursive(5);
echo PHP_EOL;

// Untuk mengetahui nilai deret fibonacci pada n index maka kita dapat membuatnya program sebagai berikut
class Fibonacci
{
public static function calculate(int $limit)
{
if (0 === $limit || 1 === $limit) {
return $limit;
}
if (2 === $limit) {
return 1;
}
return self::calculate($limit - 1) + self::calculate
($limit - 2);
}
}
// index dimulai dari 0
// 0, 1, 1, 2, 3, 5, 8
echo Fibonacci::calculate(6);
echo PHP_EOL;


