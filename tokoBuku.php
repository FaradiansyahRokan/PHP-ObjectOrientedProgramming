<?php

class buku{
    // Atributte
    public 
        $judul = "PemrogramanDasarPHP",
        $penulis = "Saya",
        $harga = 20000,
        $penerbit = "Haru";

    public
        function membeliBuku(){
            echo "harga buku yang anda beli {$this->harga}";
        }
        
}
// Object
$Dasar = new buku;
$Dasar->judul = "Beginner";
$Dasar->harga = 50000;
$menengah = new buku;
$lanjutan = new buku;

var_dump($Dasar);
$Dasar->membeliBuku();



