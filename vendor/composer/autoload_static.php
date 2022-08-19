<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27993c658f1d63c9b78575a5da5dca0b
{
    public static $files = array (
        'e8169fc2e03585f2d0c6aebed557c2db' => __DIR__ . '/../..' . '/app/router/router.php',
        '9234d4012dea4eae61f5f38dc8ec3660' => __DIR__ . '/../..' . '/app/core/controller.php',
        'e69060cd79c1a6fedcb8b48cc8b9652f' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '95461fc693127a413c8a8aa7237986bc' => __DIR__ . '/../..' . '/app/database/connect.php',
        '7367bd2a498b4d11ce3fb765eebfa28f' => __DIR__ . '/../..' . '/app/database/fetch.php',
        'f651997b3b1521a84d32ecd2ad341fca' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27993c658f1d63c9b78575a5da5dca0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27993c658f1d63c9b78575a5da5dca0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27993c658f1d63c9b78575a5da5dca0b::$classMap;

        }, null, ClassLoader::class);
    }
}
