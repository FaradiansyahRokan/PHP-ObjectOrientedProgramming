<?php
class hewan {
    private $jenis;

    public function setJenis($jenis){
        $this->jenis = $jenis;
    }
    function getJenis(){
        return $this->jenis;
    }
}

class kambing extends hewan{

}
class hiu extends hewan{

}
class harimau extends hewan{

}
// KMABING
$kambing = new kambing;
$kambing->setJenis('herbivora');
// HIU
$hiu = new hiu;
$hiu->setJenis('karnivora');
// HARIMAU
$harimau = new harimau;
$harimau->setJenis('karnivora');

echo $kambing->getJenis();
echo PHP_EOL;
echo $hiu->getJenis();
echo PHP_EOL;
echo $harimau->getJenis();