<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit046ffa85d8bfd67c27e2b88037e21068
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit046ffa85d8bfd67c27e2b88037e21068', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit046ffa85d8bfd67c27e2b88037e21068', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit046ffa85d8bfd67c27e2b88037e21068::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
