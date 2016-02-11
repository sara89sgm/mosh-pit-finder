<?php

namespace Api\DefaultApi;

class Routes extends \Api\Routes
{

    /**
     * Register base endpoint.
     *
     * @return $this
     */
    public function register()
    {
        $this->getApp()->get('/', 'Api\DefaultApi\Controllers\DefaultController::info');
        return $this;
    }

}
