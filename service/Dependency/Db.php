<?php

namespace service\Dependency;

class Db
{

    public function set(\Slim\Container $container)
    {

        $container['db'] = function($sc) {
            $db = $sc->db_settings;
            return new \Slim\PDO\Database($db['dsn'], $db['username'], $db['password']);
        };
    }

}
