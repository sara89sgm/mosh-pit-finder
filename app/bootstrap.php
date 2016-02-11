<?php

use Api\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * API Application bootstrap process.
 */

$startTime = microtime(true);
date_default_timezone_set( 'Europe/London' );

// register vendor auto loaders
require __DIR__ . '/../vendor/autoload.php';

// simple config handling based on ENV setting
$config =  include __DIR__ . '/config/config.php';

// overwrite config based on environment
if ($envMode = getenv('APP_ENV')) {
    $configOverride = __DIR__ . "/config/{$envMode}/config.php";
    if (file_exists($configOverride)) {
        $config = ((array) include $configOverride) + $config;
    }
} else {
    $envMode = 'prod';
}

	//Config for Uber
    $uberConfig['server_token'] = getenv('Uber_Server_Token');
    $uberConfig['client_id'] = getenv('Uber_Client_Id');
    $uberConfig['app_id'] = getenv('Uber_App_Id');

	if ($envMode = getenv('APP_ENV')) {
		$uberConfig['use_sandbox'] = true;
	} else {
	    $uberConfig['use_sandbox'] = false;
	}

// init and set app settings
$app = new Application(array(
    'environment'   => $envMode,
    'debug'         => $config['debug'],
    'config'        => $config,
    'startTime'     => $startTime
));

$app['uber_config']	= $uberConfig;
$app['citymapper_key'] = getenv('Citymapper_key');
$app['hailo_key'] = getenv('Hailo_key');

// custom default errors
require __DIR__ . '/config/errors.php';

// register services
require __DIR__ . '/config/services.php';

// register routes
require __DIR__ . '/config/routes.php';

// middleware hooks
// @see http://silex.sensiolabs.org/doc/middlewares.html
require __DIR__ . '/config/middleware/before.php';
require __DIR__ . '/config/middleware/after.php';
require __DIR__ . '/config/middleware/finish.php';

return $app;
