<?php

namespace app;

class User
{

    protected $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function get($request, $response, $args)
    {
        //Do some application logic here
        
        $v = ['set_var' => 'view injected variable', 'passed_args'=>implode(', ', $args)];
        return $this->container->view->render($response, 'user.html', $v);
        //or for no views: return $response->withJson(['foo'=>'bar']);
    }
    
    
    public function listUsers($request, $response, $args)
    {
        //some other method which you can setup in the router as i.e. app\User:list-users
    }

}
