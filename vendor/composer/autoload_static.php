<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit332d57a1eb5b00f1dd6cc8c2a06d0625
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'A' => 
        array (
            'App\\Repositories\\' => 17,
            'App\\Models\\' => 11,
            'App\\Interfaces\\' => 15,
            'App\\Controllers\\' => 16,
            'App\\Classes\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'App\\Repositories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Repositories',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'App\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Interfaces',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
        'App\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit332d57a1eb5b00f1dd6cc8c2a06d0625::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit332d57a1eb5b00f1dd6cc8c2a06d0625::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit332d57a1eb5b00f1dd6cc8c2a06d0625::$classMap;

        }, null, ClassLoader::class);
    }
}