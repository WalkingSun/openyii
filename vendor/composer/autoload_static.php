<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe6eb0f74c50e56b168d8ebc490f32de
{
    public static $files = array (
        '9e4824c5afbdc1482b6025ce3d4dfde8' => __DIR__ . '/..' . '/league/csv/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Csv\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/csv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe6eb0f74c50e56b168d8ebc490f32de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe6eb0f74c50e56b168d8ebc490f32de::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
