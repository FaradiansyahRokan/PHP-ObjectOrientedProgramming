<?php

class Hewan{
    protected $kaki = 4;
}

class Domba extends Hewan{
    public function pp(){
        return $this->kaki;
    }
}

$domba = new Domba;
echo $domba->pp();