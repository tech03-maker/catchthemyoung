<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2bb704b3cb417d8c571a147142a4df8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita2bb704b3cb417d8c571a147142a4df8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2bb704b3cb417d8c571a147142a4df8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2bb704b3cb417d8c571a147142a4df8::$classMap;

        }, null, ClassLoader::class);
    }
}