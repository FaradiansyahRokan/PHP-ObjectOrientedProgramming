<?php
interface helloWorld{
    function sayHello(): void;
}
$helloWorld = new class implements helloWorld{
    function sayHello(): void
    {
        echo "ini Adalah anonymous Class" . PHP_EOL;
    }
};

// anonymousClass Juga mendukung Constructor Seeperti Contoh Berikut

$helloWorld = new class("Rokan") implements helloWorld{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "hello $this->name" . PHP_EOL;
    }
};
$helloWorld->sayHello();

