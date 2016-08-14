<?php

namespace app;

class Home
{

    protected $container;

    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }

    public function index($request, $response, $args)
    {
        //Do some application logic here
        
        $v = ['set_var' => 'view injected variable', 'passed_args'=>implode(', ', $args)];
        return $this->container->view->render($response, 'home.html', $v);
        //or return $response->withJson(['foo'=>'bar']);
    }
    
    
    public function components($request, $response, $args)
    {
        //some other method which you can setup in the router as i.e. app\Home:components
    }

}
