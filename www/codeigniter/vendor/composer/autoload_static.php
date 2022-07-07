<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8a201a0fa22808cf6d66995b00414fe
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsstream/src/main/php',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8a201a0fa22808cf6d66995b00414fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8a201a0fa22808cf6d66995b00414fe::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb8a201a0fa22808cf6d66995b00414fe::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb8a201a0fa22808cf6d66995b00414fe::$classMap;

        }, null, ClassLoader::class);
    }
}