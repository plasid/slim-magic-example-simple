<?php

namespace service\Middleware;

class Cors
{
      
    public static function get(\Slim\Container $container)
    {       
       return new \CorsSlim\CorsSlim($container->cors_settings);
    }
  
}
