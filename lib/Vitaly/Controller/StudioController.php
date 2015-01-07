<?php

namespace Vitaly\Controller;

use Vitaly\Model\Studios as Studios;

class StudioController extends DefaultController
{
    public function indexAction()
    {
        return $this->renderTemplate('studios.php');
    }

    public function findAction()
    {
        if ($_POST) {
            $studioName = $_POST['studio'];
            $studios = new Studios();
            return $this->renderTemplate('studios.php', $studios->getStudio($studioName));
        } else {
            return $this->redirectUrl('studios');
        }
    }
}