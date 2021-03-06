<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad11e7c32b70bd03e648e1d2ac1574ee
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad11e7c32b70bd03e648e1d2ac1574ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad11e7c32b70bd03e648e1d2ac1574ee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
