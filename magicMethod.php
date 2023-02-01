<?php
class MagicMethod
{
private $name;
public function __set($property, $value)
{
if ('name' === $property) {
$this->{$property} = $value;
} else {
throw new ParseError(sprintf('Undefined property
%s in class %s', $property, __CLASS__));
}
}
}
$magic = new MagicMethod();
$magic->name = 'Rokan Subi Faradiansyah';

//  __toString
class Student{
    public $id;
    public $name;
    public $kelas;

    public function __toString()
    {
        return "Siswa dengan ID: $this->id, Nama: $this->name, Kelas: $this->kelas";
    }
}

$student = new Student;
$student->id = "1";
$student->name = "rokan";
$student->kelas = "X RPL";

$string = (string) $student;



