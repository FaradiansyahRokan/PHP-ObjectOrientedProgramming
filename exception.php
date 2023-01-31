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
try{
Errorable::calculate(7);
}
catch (DivisionByZeroError $e){
    $e->getMessage();
    echo PHP_EOL;
}
echo 'Ini tidak dieksekusi';
echo PHP_EOL;



class Connection1
{
public function connect()
{
throw new RuntimeException('Anda harus mengimplement
asikan method connect() sesuai dengan database driver yang A
nda gunakan.');
}
}
try {
$connection = new Connection();
$connection->connect();
} catch (RuntimeException $e) {
echo $e->getMessage();
echo PHP_EOL;
}
echo 'Ini tetap dieksekusi';
echo PHP_EOL;



