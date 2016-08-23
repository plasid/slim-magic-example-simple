<?php

namespace service\Dependency;

class Twig
{

    public function set(\Slim\Container $container)
    {
        $container['view'] = function($c) {
            $view = new \Slim\Views\Twig('view', [
                    //'cache' => 'cache',
            ]);

            $view->addExtension(new \Slim\Views\TwigExtension(
                    $c->router, $c->request->getUri()
            ));
            
            return $view;
        };
    }

}
