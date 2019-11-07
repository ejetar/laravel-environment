<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7eb53afa3cbe7dcaa6ae80c251e4dba4
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ejetar\\LaravelEnvironment\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ejetar\\LaravelEnvironment\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7eb53afa3cbe7dcaa6ae80c251e4dba4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7eb53afa3cbe7dcaa6ae80c251e4dba4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
