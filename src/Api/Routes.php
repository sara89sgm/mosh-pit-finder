<?php

namespace Api;

abstract class Routes
{
    /**
     * @var \Silex\Application
     */
    private $app;

    public function __construct(Application $app = null)
    {
        if ($app) {
            $this->setApp($app);
        }
    }

    public function setApp(Application $app)
    {
        $this->app = $app;
        return $this;
    }

    public function getApp()
    {
        return $this->app;
    }

    /**
     * @return $this
     */
    abstract public function register();

}
