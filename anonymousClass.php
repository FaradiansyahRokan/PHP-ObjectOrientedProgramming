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

$helloWorld->sayHello();
