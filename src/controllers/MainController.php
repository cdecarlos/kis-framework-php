<?php

namespace KIS\controllers;

use KIS\controllers\ControllerBase;

class MainController extends ControllerBase
{
    public function index(): void
    {
        $this->response('Hello World from KIS Framework!');
    }
}
