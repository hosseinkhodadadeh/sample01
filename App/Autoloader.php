<?php
namespace App;
class Autoloader
{
    public function load($class)
    {
        $file = ROOT . DS . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
    }

    public static function registerAutoLoad()
    {
        $instance = new self();
        spl_autoload_register([$instance, 'load']);
    }
}