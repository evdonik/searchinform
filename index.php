<?php
require 'vendor/autoload.php';
sanitizeXSS();
use App\Core\Router;
session_start();

$router = new Router;
$router->run();
