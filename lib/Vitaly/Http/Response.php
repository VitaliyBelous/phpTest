<?php

namespace Vitaly\Http;

use Vitaly\Controller\DefaultController;

class Response extends DefaultController
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
}