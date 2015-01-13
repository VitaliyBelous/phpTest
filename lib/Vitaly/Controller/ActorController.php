<?php

namespace Vitaly\Controller;

use Vitaly\Http\Response;
use Vitaly\Model\Actors as Actors;

class ActorController extends Response
{
    public function indexAction()
    {
        $actors = new Actors();
        return $this->renderTemplate('fee.php', $actors->getFee());
    }
}