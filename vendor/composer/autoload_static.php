<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cf3c3f2d59f4a31a96d492456e5a719
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'iutnc\\deefy\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'iutnc\\deefy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/td5/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cf3c3f2d59f4a31a96d492456e5a719::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cf3c3f2d59f4a31a96d492456e5a719::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8cf3c3f2d59f4a31a96d492456e5a719::$classMap;

        }, null, ClassLoader::class);
    }
}
