<?php


class coba{
    
    protected $dua = "rokan";
    public
        function satu(){

            echo "$this->dua";
    }
}
$tes = new coba;

class ulangan{
    public
        $mtk,
        $indo,
        $pjok;
        const A = 90;
        const B = 80;
        const C = 70;

    public function cetakRaport($name){
    if($this->mtk >= self::A){
        $nilai_mtk = "A" . PHP_EOL;
    } elseif($this->mtk >= self::B){
        $nilai_mtk = "B" . PHP_EOL;
    } elseif($this->mtk >= self::C){
        $nilai_mtk = "C" . PHP_EOL;
    } elseif($this->mtk = null){
        $nilai_mtk = "Masukan Nilai" . PHP_EOL;
    }else{
        $nilai_mtk =  "GK lulus" . PHP_EOL;
    }

    // indo
    if($this->indo >= self::A){
        $nilai_indo = "A" . PHP_EOL;
    } elseif($this->indo >= self::B){
        $nilai_indo = "B" . PHP_EOL;
    } elseif($this->indo >= self::C){
        $nilai_indo = "C" . PHP_EOL;
    } elseif($this->indo = null){
        $nilai_indo = "Masukan Nilai" . PHP_EOL;
    }else{
        $nilai_indo =  "GK lulus" . PHP_EOL;
    }

    // pjok
    if($this->pjok >= self::A){
        $nilai_pjok = "A" . PHP_EOL;
    } elseif($this->pjok >= self::B){
        $nilai_pjok = "B" . PHP_EOL;
    } elseif($this->pjok >= self::C){
        $nilai_pjok = "C" . PHP_EOL;
    } elseif($this->pjok = null){
        $nilai_pjok = "Masukan Nilai" . PHP_EOL;
    }else{
        $nilai_pjok =  "GK lulus" . PHP_EOL;
    }

    return  "Selamat Ananda $name Mendapatkan Nilai $nilai_mtk" . PHP_EOL . "Selamat Ananda $name Mendapatkan Nilai $nilai_indo" . PHP_EOL . "Selamat Ananda $name Mendapatkan Nilai $nilai_pjok" . PHP_EOL; 
    
}  
}
$nilai = new ulangan;
$nilai->mtk = 80;
$nilai->indo = 90;
$nilai->pjok = 70;
echo $nilai->cetakRaport("Budi");



class kelas{
    private $jmlSiswa, $tv, $meja ,$kursi, $papanTulis;

    public $namakelas;

    public function __construct($Kelas)
    {
        $this-> namakelas = $Kelas;
    }

    public function setProfile(){
        $this->jmlSiswa = 16;
        $this->tv = 1;
        $this->meja = 2;
        $this->kursi = 19;
        $this->papanTulis = 1;
    }

    public function getProfileClass(){
        return "ini adalah kelas $this->namakelas , disini kami berjumlah $this->jmlSiswa, dan kami memiliki $this->tv buah, meja $this->meja buah, kursi $this->kursi, dan $this->papanTulis papanTulis";
    }
}

class SMP extends kelas{
    // mengubah function tanpa mengubah data dengan parent
    public function setDataSMP($jmlSiswa, $tv, $meja ,$kursi, $papanTulis){
    $data__parent =  parent::setProfile($jmlSiswa, $tv, $meja ,$kursi, $papanTulis);
    }
}
class SMK extends kelas{
    public function profile(){
        parent::getProfileClass();
            return "ppppppp";
        
    }
}
$xRPL = new SMK("10 RPL");
$xRPL->setProfile();
echo $xRPL->getProfileClass() . PHP_EOL;
$ixSMP = new SMP("9 A");
$ixSMP->setDataSMP(12,9,5,3,1);
echo $ixSMP->getProfileClass() . PHP_EOL;
$XII = new SMK("11 tkj");
echo $XII->profile() . PHP_EOL;


// Static Class
class oi{
    public static $angka = 1;
    public
        static
            function helo(){

                 return "ini static ke- " . self::$angka++ . " Kali";
            }
}

$nilai = new oi;
echo $nilai->helo() . PHP_EOL;
echo $nilai->helo() . PHP_EOL;
echo $nilai->helo() . PHP_EOL;
echo $nilai->helo() . PHP_EOL;