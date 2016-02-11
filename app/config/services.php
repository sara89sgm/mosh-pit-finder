<?php
/**
 * Register services here.
 */

// monolog service

$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => $app['config']['paths']['logs'] . $app['environment'] . '.log',
    'monolog.level' => $app['debug'] ? \Monolog\Logger::DEBUG : \Monolog\Logger::INFO,
    'monolog.name' => $app['config']['name'],
));

// TODO [2013-09-20 23:35:21] myapp.INFO: PREFIX < 200 [] []
//$app['monolog'] = $app->share($app->extend('monolog', function($monolog) use ($app) {
//    $monolog->pushHandler(...);
//    return $monolog;
//}));
