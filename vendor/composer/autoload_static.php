<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde7a57e2476a66bf51b459694364c8cf
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PromptPay' => 
            array (
                0 => __DIR__ . '/../..' . '/php-sdk/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitde7a57e2476a66bf51b459694364c8cf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
