<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd627f8079c1fdad89e74c8adac50325a
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd627f8079c1fdad89e74c8adac50325a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd627f8079c1fdad89e74c8adac50325a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
