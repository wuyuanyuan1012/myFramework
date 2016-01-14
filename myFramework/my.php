<?php
//MY路径
define('MY_PATH', __DIR__.'/');
//应用路径
defined('APP_PATH') OR define('APP_PATH', $_SERVER['SCRIPT_FILENAME']);

function myAutoloader($class) {
    
    if (isset($classMap[$class])) {
        $file = $classMap[$class];
        if (file_exists($file)) {
            include $file;
        }
    }
}

spl_autoload_register('myAutoloader');