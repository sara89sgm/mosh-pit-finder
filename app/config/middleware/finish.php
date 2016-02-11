<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Execute tasks after the Response has been sent to the
 * client (like sending emails or logging).
 */

$app->after(function (Request $request, Response $response) {

});
