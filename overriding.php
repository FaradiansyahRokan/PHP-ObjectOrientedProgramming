<?php

class pp{
    private $judul ,$penulis ,$penerbit, $harga;

    public function __construct($judul = 'Judul' ,$penulis = 'penulis' ,$penerbit = 'penerbit', $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // Label Adalah Hasil Akhir
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoProduct(){
        $str = "$this->judul, {$this->getLabel()} - (Rp. $this->harga)";
        return $str;
    } 
}

class komik extends pp{
    private $jumlahHalaman;

    public function __construct($judul ,$penulis ,$penerbit, $harga, $jumlahHalaman)
    {
        parent::__construct($judul ,$penulis ,$penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduct()
    {
        $str = "komik : " . parent::getInfoProduct() . "~ {$this->jumlahHalaman} Halaman";

        return $str;
    }
}

class game extends pp{
    private $waktuMain;

    public function __construct($judul ,$penulis ,$penerbit, $harga,$waktuMain)
    {
        parent::__construct($judul ,$penulis ,$penerbit, $harga,$waktuMain);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduct()
    {
        $str = "Game : " . parent::getInfoProduct() . " ~ {$this->waktuMain} jam";
        return $str;
    }
}

$buku1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 28000, 100);
echo $buku1->getInfoProduct() . PHP_EOL;
$game = new game("Valorant", "orang", "Riot Games", "free" , 90);
echo $game->getInfoProduct();
