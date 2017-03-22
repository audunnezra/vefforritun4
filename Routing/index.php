<?php
/*
var_dump($_SERVER);

var_dump($_SERVER['REQUEST_URI']);

$uri = trim($_SERVER['REQUEST_URI'], "/");

var_dump($uri);

if($uri == "")
{
	require 'homepage.php';
}
if($uri == "about")
{
	// Megum ekki búa til möppu sem heitir about
	require 'about.php';
}
*/
// Class Router
// Class Request
// Bootstrap file
// Views in folder

// Views
// 		homepage.view.php
// 		about.view.php
// 		Partials
// 			head.view.php
// 			footer.view.php
// 			nav.view.php
// Bootstrap
// 		bootstrap.php
// 		Request.php
// 		Router.php
// index.php
// about.php
// homepage.php

require 'core/bootstrap.php';

$router = new Router;

$router->define('/', 'homepage.php');
$router->define('/about', 'about.php');

var_dump(Request::uri());

require $router->direct(Request::uri());