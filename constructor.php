<?php
class saya{

    private $name;
    private $alamat = "null";
    private $negara = "indonesia";


        function __construct($name, $alamat, $negara){
            $this->name = $name;
            $this->alamat = $alamat;
            $this->negara = $negara;
        }

        // destructor
        function __destruct()
        {
            echo "object Person {$this->name} is Destroyed" . PHP_EOL;
        }
}
$rokan = new saya("rokan", "bandung", "indo");

