<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb72ed390c81cdd875e7d4c59ce5d390
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb72ed390c81cdd875e7d4c59ce5d390::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb72ed390c81cdd875e7d4c59ce5d390::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb72ed390c81cdd875e7d4c59ce5d390::$classMap;

        }, null, ClassLoader::class);
    }
}
