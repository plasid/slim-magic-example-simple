<?php

namespace service\Middleware;

class Session
{

    protected $sc;

    public function __construct(\Slim\Container $container)
    {
        $this->sc = $container;
    }

    public function __invoke($request, $response, $next)
    {
        $mw = new \Slim\Middleware\Session($this->sc->session_settings);
        return $mw->__invoke($request, $response, $next);
    }

}
