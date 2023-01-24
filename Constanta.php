<?php
// Pada PHP versi 7.4 var constant dapat di buat dengan function define()
define("APP", "Belajar PHP");
// namun pada versi PHP 7.4 ke atas cukup menggunakan keyword const.
const APPD = "Dasar";

class lingkaran{
    private $jari;
    public  const PI = 3.14;

public function hitungluas($jari){
    return self::PI * $jari * $jari;
    }
}
// cara memanggil class di luar class
$lingkaran1 = new lingkaran;
echo $lingkaran1->hitungluas(7);
