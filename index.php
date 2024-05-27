<?php

require_once __DIR__ . '/vendor/autoload.php';

// Get controller and action
$controllerName = $_GET['controller'];
$actionName = $_GET['action'];

// Load classname
$classControllerName = 'KIS\controllers\\' . ucfirst($controllerName) . 'Controller';

// Check controller class exists
if (!class_exists($classControllerName)) {
    http_response_code(404);
    echo 'Controller not found';
    exit;
}

// Create controller
$controller = new $classControllerName();

// Check action exists
if (!method_exists($controller, $actionName)) {
    http_response_code(404);
    echo 'Action not found';
    exit;
}

// Call action
$controller->$actionName();
