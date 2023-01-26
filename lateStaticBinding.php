<?php
class StringMutator
{
public static function bold(string $word): string
{
return sprintf('<b>%s</b>', $word);
}
public static function italic(string $word): string
{
return sprintf('<i>%s</i>', $word);
}
public static function boldItalic(string $word): string
{
return self::italic(self::bold($word));
}
}
class ChildStringMutator extends StringMutator
{
public static function bold(string $word): string
{
return '<b>STATIC LATE BINDINGS</b>';
}
}
echo ChildStringMutator::boldItalic('Muhamad Surya Iksanudin'
);
// Bila melihat contoh diatas, seharusnya ketika kita memanggil ChildStringMutator::boldItalic('Muhamad Surya Iksanudin') maka output-nya adalah <i><b>STATIC LATE BINDINGS</b></i> karena kita telah meng-override method bold() pada class ChildStringMutator . 


// Untuk mengatasi hal tersebut, kita dapat keyword static
class StringMutator2
{
public static function bold(string $word): string
{
return sprintf('<b>%s</b>', $word);
}
public static function italic(string $word): string
{
return sprintf('<i>%s</i>', $word);
}
public static function boldItalic(string $word): string
{
return static::italic(static::bold($word));
}
}
class ChildStringMutator2 extends StringMutator2
{
public static function bold(string $word): string
{
return '<b>STATIC LATE BINDINGS</b>';
}
}
echo ChildStringMutator::boldItalic('Muhamad Surya Iksanudin'
);


