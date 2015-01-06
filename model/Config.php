<?php

namespace Model;

abstract class Config
{
    protected $host;
    protected $charset;
    protected $dbName;
    protected $user;
    protected $password;

    private function getConfig()
    {
        return $config = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/config/config.xml');
    }

    protected function getHost()
    {
        $config = $this->getConfig();
        return $this->host = (string)$config->host;
    }

    protected function getCharset()
    {
        $config = $this->getConfig();
        return $this->charset = (string)$config->charset;
    }

    protected function getDbName()
    {
        $config = $this->getConfig();
        return $this->dbName = (string)$config->db_name;
    }

    protected function getUser()
    {
        $config = $this->getConfig();
        return $this->user = (string)$config->user;
    }

    protected function getPassword()
    {
        $config = $this->getConfig();
        return $this->password = (string)$config->password;
    }
}