<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf946bd5652b0172c79f797259b86a25a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mexitek\\PHPColors\\Color' => __DIR__ . '/..' . '/mexitek/phpcolors/src/Mexitek/PHPColors/Color.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf946bd5652b0172c79f797259b86a25a::$classMap;

        }, null, ClassLoader::class);
    }
}