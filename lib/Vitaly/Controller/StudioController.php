<?php

namespace Vitaly\Controller;

use Vitaly\Http\Response;
use Vitaly\Model\Studios as Studios;

class StudioController extends Response
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
            $selectedStudios = $studios->getStudio($studioName);
            if($_POST['isAjax']) {
                return json_encode($selectedStudios);
            } else {
                return $this->renderTemplate('studios.php', $selectedStudios);
            }
        } else {
            return $this->redirectUrl('studios');
        }
    }


    public function getFormUrl()
    {
        return $this->getBaseUrl() . "studios/actors";
    }

}

