<?php
class singa{
    public
        static $kaki = 4;
    public
        static
            function  lari(){
                echo singa::$kaki;
            }
}
// jika code bersifat static maka kita tidak perlu melakukan instansiasi.
$anjing = new singa();
echo $singa->lari();



