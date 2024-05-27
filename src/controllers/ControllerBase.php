<?php

namespace KIS\controllers;

class ControllerBase
{
    public function response(
        string $response,
        int    $statusCode = 200,
        string $contentType = 'text/html'
    ): void
    {
        header('Content-Type: ' . $contentType . '; charset=utf-8');
        http_response_code($statusCode);

        echo $response;
        exit;
    }
}
