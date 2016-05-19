<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit218b7220866084a86ff000ab42617317
{
    public static $files = array (
        '274506cc60f14c0b103b3d3d65a0e934' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'phpQuery' => 
            array (
                0 => __DIR__ . '/..' . '/coderockr/php-query/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit218b7220866084a86ff000ab42617317::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit218b7220866084a86ff000ab42617317::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit218b7220866084a86ff000ab42617317::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}