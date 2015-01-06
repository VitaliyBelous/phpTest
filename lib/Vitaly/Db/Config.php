<?php

namespace Vitaly\Db;

class Config
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
        return $config = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/app/config.xml');
    }

    /**
     * @return string
     */
    public function getHost()
    {
        $config = $this->getConfig();
        return $this->host = (string) $config->host;
    }

    /**
     * @return string
     */
    public function getCharset()
    {
        $config = $this->getConfig();
        return $this->charset = (string) $config->charset;
    }

    /**
     * @return string
     */
    public function getDbName()
    {
        $config = $this->getConfig();
        return $this->dbName = (string) $config->db_name;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        $config = $this->getConfig();
        return $this->user = (string) $config->user;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        $config = $this->getConfig();
        return $this->password = (string) $config->password;
    }
}