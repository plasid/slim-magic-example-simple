<?php

namespace service\Dependency;

class Twig
{

    public static function set(\Slim\Container $container)
    {

        $view = new \Slim\Views\Twig('view', [
                //'cache' => 'cache',
        ]);

        $view->addExtension(new \Slim\Views\TwigExtension(
                $container['router'], $container['request']->getUri()
        ));

        $container['view'] = $view;
    }

}
