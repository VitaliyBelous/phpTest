<?php

namespace Vitaly\Db;

abstract class Model
{
    protected static $connection = array();

    protected function getConnection($name = 'default')
    {
        if (!isset(self::$connection[$name])) {
            $config = new Config();
            $dsn = 'mysql:host=' . $config->getHost() . ';dbname=' . $config->getDbName();
            if (!$connection = new Connection($dsn, $config->getUser(), $config->getPassword())) {
                throw new \Exception('Cat not establish database connection!');
            }

            self::$connection[$name] = $connection;
        }
        return self::$connection[$name];
    }
}