<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85ecf2772d21671e4052e0aad0d00772
{
    public static $files = array (
        '97327a360a019aef6c5eb77040e50afb' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '6223be9ccf7f5aa65eb76133d4a6c7c7' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
        '7c1a9d49581e67fdb0b527f369b6e725' => __DIR__ . '/../..' . '/app/helpers/flash.php',
        '4b95a27fb2e52614c59646f03e7385f9' => __DIR__ . '/../..' . '/app/helpers/sessions.php',
        'cc3aedb86a2dd08f4e6abd2d8053a2b6' => __DIR__ . '/../..' . '/app/helpers/validate.php',
        '46bb0bfabef0eb65e285e67dfa001295' => __DIR__ . '/../..' . '/app/router/router.php',
        'ff8eb33fa35dd77dc422198d0eae994c' => __DIR__ . '/../..' . '/app/core/controller.php',
        '264a786b23bf46be20caff46c64d291c' => __DIR__ . '/../..' . '/app/database/connect.php',
        '3626d367c64e8eae583306f6ec554d30' => __DIR__ . '/../..' . '/app/database/fetch.php',
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
        'app\\controllers\\Login' => __DIR__ . '/../..' . '/app/controllers/Login.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85ecf2772d21671e4052e0aad0d00772::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85ecf2772d21671e4052e0aad0d00772::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85ecf2772d21671e4052e0aad0d00772::$classMap;

        }, null, ClassLoader::class);
    }
}
