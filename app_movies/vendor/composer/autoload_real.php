<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb8c8c60ba7a886827c2c6e3872176bea
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

        spl_autoload_register(array('ComposerAutoloaderInitb8c8c60ba7a886827c2c6e3872176bea', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb8c8c60ba7a886827c2c6e3872176bea', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb8c8c60ba7a886827c2c6e3872176bea::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
