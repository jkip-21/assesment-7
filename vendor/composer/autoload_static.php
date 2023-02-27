<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11117b0b5236803fc8fb0d82a74d0f4f
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11117b0b5236803fc8fb0d82a74d0f4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11117b0b5236803fc8fb0d82a74d0f4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11117b0b5236803fc8fb0d82a74d0f4f::$classMap;

        }, null, ClassLoader::class);
    }
}