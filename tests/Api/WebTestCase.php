<?php

namespace Tests\Api;

/**
 * Basic test class to check the application status route
 */
abstract class WebTestCase extends \Silex\WebTestCase
{

    /**
     * @return mixed|\Symfony\Component\HttpKernel\HttpKernel
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../../app/bootstrap.php';
        $app['debug'] = true;
        $app['exception_handler']->disable();
        return $app;
    }

    /**
     * @param $uri
     * @param string $method
     * @return \Symfony\Component\HttpKernel\Client
     */
    public function getClient($uri, $method = 'GET')
    {
        $client = static::createClient();
        $client->request($method, $uri);
        return $client;
    }

}