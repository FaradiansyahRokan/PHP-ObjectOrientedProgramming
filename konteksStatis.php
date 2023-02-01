<?php
class A{
    public static function foo(){
        echo 'nama Saya Rokan' . PHP_EOL;
        // Cara memanggil method bar() menggunakan method foo()
        (new A())->bar();
        // bisa juga dengan keyword self Seperti Contoh Berikut
        (new self())->bar();
        // bisa juga dengan keyword static Seperti Contoh Berikut
        (new static())->bar();
    }
    public function bar(){
        echo 'bar' . PHP_EOL;
    }
}
class B{
    public static function Ba(){
        echo "kontekStatis" . PHP_EOL;
        (new self())->Be();
    }
    public function Be(){
        echo "Teman Ba" . PHP_EOL;
    }
}
A::foo();
B::Ba();
