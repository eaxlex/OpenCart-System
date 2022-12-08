<?php
// autoload.php @generated by Composer
/*
if (PHP_VERSION_ID < 50600) {
    class MktrFile
    {
        private static $loader;

        public static function loadClass($class)
        {
            if ('Composer\Autoload\ClassLoader' === $class) {
                require __DIR__ . '/ClassLoader.php';
            }
        }
    }
    spl_autoload_register(array('MktrFile', 'loadClass'), true, true);
} else {
    require_once __DIR__ . '/composer/autoload_real.php';
    return MKTRAutoLoad::getLoader();
}
*/
require_once __DIR__ . '/composer/autoload_real.php';
return MKTRAutoLoad::getLoader();