<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Tweak the Response before it is sent to the client
 */

$app->after(function (Request $request, Response $response) {

});
