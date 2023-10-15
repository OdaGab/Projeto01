<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ca505e2c4a313fba51fbac62719fa2e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ca505e2c4a313fba51fbac62719fa2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ca505e2c4a313fba51fbac62719fa2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ca505e2c4a313fba51fbac62719fa2e::$classMap;

        }, null, ClassLoader::class);
    }
}