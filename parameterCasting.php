<?php
declare(strict_types=1);
class ParameterCasting
{
public function __construct(array $arrayType)
{
}
public function stringCast(string $stringType)
{
}
public function intCast(int $intType)
{
}
public function floatCast(float $floatType)
{
}
public function booleanCast(bool $booleanType)
{
}
}
$object = new ParameterCasting(array());
// . Khusus untuk tipe data float secara default kita bisa memasukkan tipe data int ataupun float (numeric) dan ini berlaku juga sebaliknya untuk int karena PHP menganggap keduanya adalah sama-sama numeric. 
$object->floatCast(1);
$object->intCast(1);


