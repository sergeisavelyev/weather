<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ac5e829a0cc8910f660cdebf1449638
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '0e423a14e27410a071e5d815d3ffc856' => __DIR__ . '/..' . '/larapack/dd/src/helper.php',
        'bbd3f4c222c0dc01d51aaddd000c7145' => __DIR__ . '/..' . '/pragmarx/ia-arr/src/Support/helpers.php',
        '5de818542d3f05537910d3201983c6e4' => __DIR__ . '/..' . '/pragmarx/ia-arr/src/Support/alias.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WayWay\\Weather\\' => 15,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'I' => 
        array (
            'IlluminateAgnostic\\Arr\\Tests\\' => 29,
            'IlluminateAgnostic\\Arr\\' => 23,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WayWay\\Weather\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'IlluminateAgnostic\\Arr\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/pragmarx/ia-arr/tests',
        ),
        'IlluminateAgnostic\\Arr\\' => 
        array (
            0 => __DIR__ . '/..' . '/pragmarx/ia-arr/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ac5e829a0cc8910f660cdebf1449638::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ac5e829a0cc8910f660cdebf1449638::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ac5e829a0cc8910f660cdebf1449638::$classMap;

        }, null, ClassLoader::class);
    }
}
