<?php

namespace service\Middleware;

class Test
{
 
    public function __invoke($request, $response, $next)
    {
        $response->getBody()->write('First run inside Test Middleware');
        $response = $next($request, $response);
        $response->getBody()->write('Last run inside Test Middleware');

        return $response;
    }

    public static function get(\Slim\Container $container)
    {
      return new Test();
    }

}
