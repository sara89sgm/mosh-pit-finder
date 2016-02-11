<?php
/**
 * Default controller for base endpoints.
 */

namespace Api\DefaultApi\Controllers;

use Api\Application;
use Api\Controller;

class DefaultController extends Controller
{

    /**
     * Return stats info API.
     *
     * @param Application $app
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function info(Application $app)
    {
        return $app->json(array(
            'name'      => $app['config']['name'],
            'version'   => $app['config']['version'],
            'source'    => $app['config']['sourceVersion'],
            'env'       => $app['environment'],
            'debug'     => $app['debug'],
        ));
    }

}
