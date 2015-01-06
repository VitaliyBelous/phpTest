<?php

namespace Model;

abstract class Config
{
    protected $host;
    protected $charset;
    protected $dbName;
    protected $user;
    protected $password;

    /**
     * @return \SimpleXMLElement
     */
    private function getConfig()
    {
        return $config = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/config/config.xml');
    }

    /**
     * @return string
     */
    protected function getHost()
    {
        $config = $this->getConfig();
        return $this->host = (string)$config->host;
    }

    /**
     * @return string
     */
    protected function getCharset()
    {
        $config = $this->getConfig();
        return $this->charset = (string)$config->charset;
    }

    /**
     * @return string
     */+6
    protected function getDbName()
    {
        $config = $this->getConfig();
        return $this->dbName = (string)$config->db_name;
    }

    /**
     * @return string
     */
    protected function getUser()
    {
        $config = $this->getConfig();
        return $this->user = (string)$config->user;
    }

    /**
     * @return string
     */
    protected function getPassword()
    {
        $config = $this->getConfig();
        return $this->password = (string)$config->password;
    }
}