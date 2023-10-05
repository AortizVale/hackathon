<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76f797b4d454edf1456986fb84dd7d77
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pedro\\Commposerg\\' => 17,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pedro\\Commposerg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76f797b4d454edf1456986fb84dd7d77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76f797b4d454edf1456986fb84dd7d77::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit76f797b4d454edf1456986fb84dd7d77::$classMap;

        }, null, ClassLoader::class);
    }
}