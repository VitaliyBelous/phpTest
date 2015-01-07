<?php

namespace Vitaly\Http;

class Router
{
    const ROUTING_CONFIG_PATH = 'app/routing.xml';
    private $_urls = array();
    private $_controllers = array();
    private $_actions = array();
    private $_trim = '/\^$';

    private function addRoutes()
    {
        $routers = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '../' . self::ROUTING_CONFIG_PATH);
        foreach ($routers as $router) {
            $this->_urls[] = (string)$router->url;
            $this->_controllers[] = (string)$router->controller;
            $this->_actions[] = (string)$router->action;
        }
        $this->matchRoutes();
    }

    private function matchRoutes()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = $uri == '/' ? $uri : trim($uri, $this->_trim);
//        $route = new ErrorController();
//        $result = $route->indexAction();
        $result = false;
        foreach ($this->_urls as $urlKey => $urlValue)
        {
            if (preg_match("#^$urlValue$#", $uri))
            {
                $controller = 'Vitaly\\Controller\\' . $this->_controllers[$urlKey] . 'Controller';
                $action = $this->_actions[$urlKey] . 'Action';

                $route = new $controller();
                $result = $route->$action();
            }
        }

        echo $result;
    }

    public function dispatchRequest()
    {
        $this->addRoutes();
    }
}