<?php

class Person{
    const AUTHOR = "rokan subhi f.";

    function orang(){
        // jika ingin memanggil const di class yang sama cukup menggunakan self::Nama_const
        return self::AUTHOR;
    }
}
$nama = new Person;
echo $nama->orang();