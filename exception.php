<?php
class Connection
{
public function connect()
{
throw new RuntimeException('Anda harus mengimplement
asikan method connect() sesuai dengan database driver yang A
nda gunakan.');
}
}
// $connect = new Connection;
// echo $connect->connect();

class Errorable
{
public static function calculate(int $number)
{
return ($number % 0); //Bila menggunakan $number / 0
}
}
Errorable::calculate(7);
echo 'Ini tidak dieksekusi';
echo PHP_EOL;

