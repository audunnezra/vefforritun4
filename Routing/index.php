<?php

require 'core/bootstrap.php';

$router = new Router;

$router->define('/', 'homepage.php');
$router->define('/about', 'about.php');

var_dump(Request::uri());

require $router->direct(Request::uri());