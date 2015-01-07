<?php

namespace Vitaly\Controller;

class IndexController extends DefaultController
{
    public function indexAction()
    {
        return $this->renderTemplate('home.php');
    }
}