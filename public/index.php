<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Sthom\Kernel\Kernel;
use Sthom\App\Controller\ErrorController;

try {
    Kernel::boot();

} catch (Exception $e) {
    $controller = new ErrorController();
    $controller->displayError($e);
}


