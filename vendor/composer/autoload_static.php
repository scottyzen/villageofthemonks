<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit349bca11c461f9472eb8b4e2ae0fac8c
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bolandish\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bolandish\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit349bca11c461f9472eb8b4e2ae0fac8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit349bca11c461f9472eb8b4e2ae0fac8c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
