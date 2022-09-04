<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit046ffa85d8bfd67c27e2b88037e21068
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit046ffa85d8bfd67c27e2b88037e21068::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit046ffa85d8bfd67c27e2b88037e21068::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit046ffa85d8bfd67c27e2b88037e21068::$classMap;

        }, null, ClassLoader::class);
    }
}