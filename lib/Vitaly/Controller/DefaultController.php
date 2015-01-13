<?php

namespace Vitaly\Controller;

abstract class DefaultController
{

    /**
     * @param $url
     * @return bool|void
     */
    protected function redirectUrl($url)
    {
        $redirect = false;
        if ($url != $_SERVER['REQUEST_URI']) {
            $redirect = header('Location: ' . $this->getBaseUrl() . $url);
        }
        return $redirect;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/';
    }
}