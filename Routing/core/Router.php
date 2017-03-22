<?php

class Router
{
	protected $routes = [];

	public function define($uri, $page)
	{
		$uri = trim($uri, '/');
		
		$this->routes[$uri] = $page;
	}

	public function has($uri)
	{
		return array_key_exists($uri, $this->routes);
	}

	public function direct($uri)
	{
		if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URI.');
	}

}