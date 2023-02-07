<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90f49e83b1ee3373ead859aa2fdc2d57
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PPH21\\App\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PPH21\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90f49e83b1ee3373ead859aa2fdc2d57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90f49e83b1ee3373ead859aa2fdc2d57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90f49e83b1ee3373ead859aa2fdc2d57::$classMap;

        }, null, ClassLoader::class);
    }
}
