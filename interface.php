<?php
interface makanan{
    public function makan();
    public function setWarna($warna);
}

abstract class buah{
    private $warna;
    abstract public function p();
}

class apel extends buah implements makanan{
    private $warna;
    public function makan()
    {
        
    }
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    public function p()
    {
    }
    
}

class jeruk extends buah implements makanan{
    public function makan()
    {

    }
    public function setWarna($warna)
    {
        
    }
    public function p(){
        
    }
}