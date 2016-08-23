<?php

namespace service\Dependency;

class notFoundHandler
{

    public function set(\Slim\Container $container)
    {
        $container['notFoundHandler'] = function ($c) {
            return function ($request, $response) use ($c) {
                return $c['view']->render($response, '404.html', [
                            "foo" => "bar"
                ]);
            };
        };
    }

}
