<?php

/**
 * Register default routes and dynamically register routes.
 *
 * Convention:  /:api/:controller
 *
 * @todo flag to scope and register all to allow forwarding?
 */

if (!empty($app['config']['routes']) || !is_array($app['config']['routes'])) {
    // register routes
    foreach ($app['config']['routes'] as $routes) {
        $r = new $routes($app);
        $r->register();
    }
}
