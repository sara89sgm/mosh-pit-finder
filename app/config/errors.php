<?php
/**
 * API custom errors by default should return in JSON format.
 *
 * @todo use error model when available
 */

use \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

$app->error(function (\Exception $e) use ($app) {
    if ($e instanceof NotFoundHttpException) {
        return $app->json(array('error' => 'Page Not Found'), 404);
    }

    $code = ($e instanceof HttpException) ? $e->getStatusCode() : 500;
    return $app->json(array('error' => $e->getMessage()), $code);
});
