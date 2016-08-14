<?php

require 'vendor/autoload.php';

//NB - see how to configure SlimMagic in config/slim.php, also look at autoload in composer.json
$container = new \Slim\Container(require 'config/slim.php');
$app = new \Slim\App($container);

$service = new \SlimMagic\ServiceContainer($app);
new \SlimMagic\Mapper($service);

$service->getSlim()->run();
