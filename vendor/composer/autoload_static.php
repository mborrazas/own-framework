<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29f182ec40286d9a96edc6abc3510b00
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29f182ec40286d9a96edc6abc3510b00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29f182ec40286d9a96edc6abc3510b00::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
