<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e7cd3e2b1c08b71561d240b34f7501b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e7cd3e2b1c08b71561d240b34f7501b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e7cd3e2b1c08b71561d240b34f7501b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
