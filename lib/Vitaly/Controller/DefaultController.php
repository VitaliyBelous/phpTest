<?php

namespace Vitaly\Controller;

abstract class DefaultController
{
    /**
     * @param $template
     * @param null $params
     * @return bool|string
     */
    protected function renderTemplate($template, $params = null)
    {
        $content = false;
        $templatePath = $_SERVER['DOCUMENT_ROOT'] . '../resources/template/' . $template;
        if (file_exists($templatePath)) {
            ob_start();
            include $templatePath;
            $content = ob_get_contents();
            ob_end_clean();
        }

        return $content;
    }

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