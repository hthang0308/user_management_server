<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb8a201a0fa22808cf6d66995b00414fe
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

        spl_autoload_register(array('ComposerAutoloaderInitb8a201a0fa22808cf6d66995b00414fe', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb8a201a0fa22808cf6d66995b00414fe', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb8a201a0fa22808cf6d66995b00414fe::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
