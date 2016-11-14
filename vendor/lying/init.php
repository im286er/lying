<?php
define('LYING_ROOT', __DIR__);

require LYING_ROOT . '/Lying.php';

spl_autoload_register([Lying::class, 'autoload']);
Lying::$classes = require LYING_ROOT . '/classes.php';
set_exception_handler(['lying\base\Exception', 'exceptionHandler']);
set_error_handler(['lying\base\Exception', 'errorHandler']);
register_shutdown_function(['lying\base\Exception', 'shutdownHandler']);
$service = require ROOT . '/config/service.php';
Lying::$container = new lying\base\Container($service);
require LYING_ROOT . '/functions.php';




