<?php
date_default_timezone_set( 'Europe/London' );
/**
 * Register autoload routine for test classes.
 */
spl_autoload_register(function($class) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace(
            array('\\', 'Tests'),
            array('/', ''), $class) . '.php';

    if (is_file($file)) {
        require_once $file;
    }
});