<?php

namespace Vitaly\Controller;

use Vitaly\Http\Response;

class IndexController extends Response
{
    public function indexAction()
    {
        return $this->renderTemplate('home.php');
    }

    public function getFeeUrl()
    {
        return $this->getBaseUrl() . "fee";
    }

    public function getStudioUrl()
    {
        return $this->getBaseUrl() . "studios";
    }
}