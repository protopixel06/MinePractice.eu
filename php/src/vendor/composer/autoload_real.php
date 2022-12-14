<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbba3433d4cc56c5b0053145d86ec5e24
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbba3433d4cc56c5b0053145d86ec5e24', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbba3433d4cc56c5b0053145d86ec5e24', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbba3433d4cc56c5b0053145d86ec5e24::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
