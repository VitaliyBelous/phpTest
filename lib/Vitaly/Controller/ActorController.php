<?php

namespace Vitaly\Controller;

use Vitaly\Model\Actors as Actors;

class ActorController extends DefaultController
{
    public function indexAction()
    {
        $actors = new Actors();
        return $this->renderTemplate('fee.php', $actors->getFee());
    }
}