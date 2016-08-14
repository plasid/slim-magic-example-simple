<?php

namespace service\Dependency;

class Db
{

    public static function set(\Slim\Container $container)
    {
        $db = $container->db_settings;
        $container['db'] = new \Slim\PDO\Database($db['dsn'], $db['username'], $db['password']);
    }

}
