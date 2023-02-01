<?php
class MagicMethod
{
private $name;
public function __set($property, $value)
{
if ('name' === $property) {
$this->name = $value;
} else {
throw new ParseError(sprintf('Undefined property
%s in class %s', $property, __CLASS__));
}
}
}
$magic = new MagicMethod();
$magic->name = 'Muhamad Surya Iksanudin';
