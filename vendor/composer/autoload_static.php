<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf19a36ac39322a83e885ea242e7e098e
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Razorpay\\Tests\\' => 15,
            'Razorpay\\Api\\' => 13,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Razorpay\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/razorpay/razorpay/tests',
        ),
        'Razorpay\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/razorpay/razorpay/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf19a36ac39322a83e885ea242e7e098e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf19a36ac39322a83e885ea242e7e098e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf19a36ac39322a83e885ea242e7e098e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
