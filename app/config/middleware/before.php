<?php

use Api\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Request before the controller is executed.
 */

$app->before(function (Request $request) {

}, Application::EARLY_EVENT);

$app->before(function (Request $request) {

}, Application::LATE_EVENT);