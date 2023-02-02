<?php
class MagicMethod
{
private $name;
public function __set($property, $value)
{
if ('name' === $property) {
$this->{$property} = $value;
return "selamt";
} else {
throw new ParseError(sprintf('Undefined property
%s in class %s', $property, __CLASS__));
}
}
}
$magic = new MagicMethod();
// echo $magic->name = "Rokan Subi Faradiansyah" . PHP_EOL;


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

class Get{
    private $name;
    public function __construct($name)
    {
    $this->name = $name;
    }
    public function __get($property)
    {
    if ($property !== null) {
    return $this->name;
    } else {
    throw new ParseError(sprintf('Undefined property
    %s in class %s', $property, __CLASS__));
    }
    }
    }
    // $get = new Get('Muhamad Surya Iksanudin');
    // echo $get->name . PHP_EOL;
    try{
        $get = new Get('Muhamad Surya Iksanudin');
        // echo $get->name . PHP_EOL;
        $get->__get("rokan");
        $get->ppp;
    }catch (ParseError $p){
        $p->getMessage();
    }

// __iiset() dan __unset()

class iset{
    private $name;

    public function __isset($property)
    {
        if('name' === $property){
            return true;
        }
    }
}
$isset = new iset();
// var_dump(isset($isset->name));

class unsets{
    private $user = [
        'nama' => 'rokan',
        'alamat' => 'Bandung'
    ];

    public function __unset($property)
    {
        if(isset($this->user[$property])){
        unset($this->user[$property]);
        }
    }
}

$obj = new unsets;
// unset($obj->nama);
// var_dump($obj);



// __sleep() dan __wakeup()

class sleep{
    protected $user = [
        'nama' => 'rokan',
        'alamat' => 'Bandung'
    ],
    $ktp = [1, 2, 3];

    public function __sleep()
    {
        return ['ktp'];
    }
}

class Csleep extends sleep{
    private $z = [
        'nama' => 'Suhbi',
        'alamt' => 'Bogor'
    ];
}
$slp = new sleep;
$C = new Csleep;
var_dump(serialize($slp));
var_dump(serialize($C));





