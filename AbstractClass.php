<?php
abstract class Connection{
    abstract public function connect($database, $username, $password, $host = 'localhost');
}
class MySQL extends Connection{
    public function connect($database, $username, $password, $host = 'localhost')
    {
        /**
* Ceritanya ini logic koneksi ke database MySQL
*
* Anda tidak bisa menggunakan _keyword_ `parent` un
tuk memanggil _method_ `connect()` milik _parent class_
* karena akan mengakibatkan error.
**/

    }
}
class PostgreSQLConnection extends Connection{
    public function connect($database, $username, $password, $host = 'localhost')
    {
        /**
* Ceritanya ini logic koneksi ke database PostgreSQ
L
*
* Anda tidak bisa menggunakan _keyword_ `parent` un
tuk memanggil _method_ `connect()` milik _parent class_
* karena akan mengakibatkan error.
**/

    }
}
class OracleConnection extends Connection{
    // jika Code ini jalankan maka akan terjadi Error PHP Fatal
    // ini terjadi karena kita membuat sebuah child class Oracle Connection yang extends dari class Connection tanpa mengimplementasikan method connect().

    // namun Jika Kita mengimplementasi ulang method connect(), Maka error nya akan Hilang 
    public function connect($database, $username, $password, $host = 'localhost')
    {
    }
}