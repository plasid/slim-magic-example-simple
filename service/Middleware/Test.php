<?php

namespace service\Middleware;

class Test
{

    protected $sc;

    public function __construct(\Slim\Container $container)
    {
        $this->sc = $container;
    }

    public function __invoke($request, $response, $next)
    {
        $response->getBody()->write('First run inside Test Middleware');
        $response = $next($request, $response);
        $response->getBody()->write('Last run inside Test Middleware');

        return $response;
    }

}
