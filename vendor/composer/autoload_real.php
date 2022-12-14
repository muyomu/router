<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcff120934cd0ef38d9d493b3ace88d61
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcff120934cd0ef38d9d493b3ace88d61', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcff120934cd0ef38d9d493b3ace88d61', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcff120934cd0ef38d9d493b3ace88d61::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
