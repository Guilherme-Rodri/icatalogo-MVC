<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca9187789cb0590f195f03358ca46597
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca9187789cb0590f195f03358ca46597::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca9187789cb0590f195f03358ca46597::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca9187789cb0590f195f03358ca46597::$classMap;

        }, null, ClassLoader::class);
    }
}
