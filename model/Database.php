<?php

namespace Model;

include($_SERVER['DOCUMENT_ROOT'] . '/classloader.php');

use \PDO;

class Database extends Config
{
    /**
     * @return bool|PDO
     */
    public function getConnection()
    {
        $pdo = false;
        try {
            $pdo = new PDO('mysql:host=' . $this->getHost() . ';dbname=' . $this->getDbName(), $this->getUser(),$this->getPassword());
        } catch (\PDOException $e) {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }

        return $pdo;
    }
}